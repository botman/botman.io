
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./bootstrap/bootstrap.js');


const algoliasearch = require('./vendor/algoliasearch.js');
const Hogan = require('./vendor/hogan.js');

$(function(){

    $('#index').affix({
        offset: {
            top: 25,
            bottom: $('footer').outerHeight()
        }
    });

    $('#documentation blockquote p:first-child').each(function() {
        var str = $(this).html();
        var match = str.match(/\{(.*?)\}/);

        if (match) {
            var icon = match[1] || false;
            var word = match[1] || false;
        }

        if (icon) {
            $(this).html(str.replace(/\{(.*?)\}/, ''));
            word = word.replace('callout', 'is');
            var icon = word.substr(3);
            $(this).parent().prepend($('<div class="pull-left fa fa-3x fa-'+icon+'"></div>'));
            $(this).parent().addClass('notification');
            $(this).parent().addClass(word);
        }
    });

    $('#versionswitch').change(function(){
        var version = $('#versionswitch option:selected').val();
        document.location.href = '/'+version+'/installation';
    });

    $('.nav-toggle').click(function() {
        $('.nav-menu').toggleClass('is-active', '');
    });

    Prism.highlightAll();

    initAlgoliaSearch();

    function initAlgoliaSearch() {
        if (window.algolia_app_id === '') {
            return;
        }

        var client = algoliasearch(window.algolia_app_id, window.algolia_search_key);
        var index = client.initIndex('docs');

        var templates = {
            suggestion: Hogan.compile($('#search_suggestion_template').html()),
            empty: Hogan.compile($('#search_empty_template').html()),
            footer: Hogan.compile($('#search_footer_template').html())
        };
        var $searchInput = $('#search-input');
        var $article = $('article');

        // typeahead datasets
        // https://github.com/twitter/typeahead.js/blob/master/doc/jquery_typeahead.md#datasets
        var datasets = [];

        datasets.push({
            source: function searchAlgolia(query, cb) {
                index.search(query, {
                    hitsPerPage: 5, tagFilters: [window.version]
                }, function searchCallback(err, content) {
                    if (err) {
                        throw err;
                    }
                    cb(content.hits)
                });
            },
            templates: {
                suggestion: templates.suggestion.render.bind(templates.suggestion),
                empty: templates.empty.render.bind(templates.empty),
                footer: templates.footer.render.bind(templates.footer)
            }
        });

        var typeahead = $searchInput.typeahead({hint: false}, datasets);
        var old_input = '';

        typeahead.on('typeahead:selected', function changePage(e, item) {
            window.location.href = '/' + item._tags[0] + '/' + item.link;
        });

        typeahead.on('keyup', function(e) {
            old_input = $(this).typeahead('val');

            if ($(this).val() === '' && old_input.length == $(this).typeahead('val')) {
                $article.css('opacity', '1');
                $searchInput.closest('#search-wrapper').removeClass('not-empty');
            } else {
                $article.css('opacity', '0.1');
                $searchInput.closest('#search-wrapper').addClass('not-empty');
            }
            if (e.keyCode === 27) {
                $article.css('opacity', '1');
            }
        });

        typeahead.on('typeahead:closed', function () {
            $article.css('opacity', '1');
        });

        typeahead.on('typeahead:closed',
            function (e) {
                return false;
                // keep menu open if input element is still focused
                if ($(e.target).is(':focus')) {
                    return false;
                }
            }
        );

        $('#cross').click(function() {
            typeahead.typeahead('val', '').keyup();
            $article.css('opacity', '1');
        });
    }

});