
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./bootstrap/bootstrap.js');

const algoliasearch = require('./vendor/algoliasearch.js');
const Hogan = require('./vendor/hogan.js');
import BotUI from './vendor/botui'

if ($('#landing-bot').length > 0) {    
    var botui = new BotUI('landing-bot');

    botui.message.add({
        delay: 700,
        human: true,
        content: 'Hello BotMan!'
    }).then(() => {

        botui.message.add({
            delay: 1200,
            loading: true,
            human: false,
            content: 'Hello!'
        });
        botui.message.add({ // show a message
            delay: 1400,
          content: 'Whats your name?'
        }).then(function () { // wait till its shown
          botui.action.text({ // show 'text' action
            action: {
              placeholder: 'Your name'
            }
          }).then(function (res) { // get the result
          botui.message.add({
            delay: 1200,
            loading: true,
            content: 'Welcome ' + res.value
          });
        });
        })

    });
}

$(function(){
    $('#index').affix({
        offset: {
            top: 25,
            bottom: $('footer').outerHeight()
        }
    });

    $('.botman-documentation-content blockquote p:first-child').each(function() {
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

            switch (icon) {
                case "info":
                    icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="8"></line></svg>'
                    break;
                case "video":
                    icon = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play-circle"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg>'
                    break;
                default:
                    break;
            }

            $(this).parent().prepend(icon);
            $(this).parent().addClass('notification');
            $(this).parent().addClass(word);
        }
    });

    $('.nav-toggle').click(function() {
        $('.nav-menu').toggleClass('is-active', '');
    });

    Prism.highlightAll();

    initAlgoliaSearch();

    function initAlgoliaSearch() {
        if (window.algolia_app_id === '' || window.algolia_app_id === undefined) {
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

document.querySelector('.js-content-container').classList.add('menu-closed');

document.querySelector('.js-toggle').addEventListener('click', event => {
    event.preventDefault();
    document.querySelector('.js-content-container').classList.toggle('menu-closed');
    document.querySelector('.js-toggle-close').classList.toggle('hidden');
    document.querySelector('.js-toggle-open').classList.toggle('hidden');
})

document.querySelector('.js-version-switcher').addEventListener('change', event => {
    document.location.href = '/' + event.target.value + '/' + window.location.pathname.split('/').slice(2).join('/');
})