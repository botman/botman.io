$(document).ready(function() {
	
	/* ===== Affix Sidebar ===== */
	/* Ref: http://getbootstrap.com/javascript/#affix-examples */

    	
	$('#doc-menu').affix({
        offset: {
            top: ($('#header').outerHeight(true) + $('#doc-header').outerHeight(true)) + 45,
            bottom: ($('#footer').outerHeight(true) + $('#promo-block').outerHeight(true)) + 75
        }
    });
    
    /* Hack related to: https://github.com/twbs/bootstrap/issues/10236 */
    $(window).on('load resize', function() {
        $(window).trigger('scroll'); 
    });
    
    
    /* Smooth scrolling */
	$('a.scrollto').on('click', function(e){
        //store hash
        var target = this.hash;    
        e.preventDefault();
		$('body').scrollTo(target, 800, {offset: 0, 'axis':'y'});
		
	});
	
    
    /* ======= jQuery Responsive equal heights plugin ======= */
    /* Ref: https://github.com/liabru/jquery-match-height */
    
     $('#cards-wrapper .item-inner').matchHeight();
     $('#showcase .card').matchHeight();

      // It's nice to just write in Markdown, so this will adjust
      // our blockquote style to fill in the icon flag and label
      $('.doc-body blockquote p:first-child').each(function() {
        var str = $(this).html();
        var match = str.match(/\{(.*?)\}/);

        if (match) {
          var icon = match[1] || false;
          var word = match[1] || false;
        }

        if (icon) {
          $(this).html(str.replace(/\{(.*?)\}/, ''));
          if (word === 'callout-info') {
            $(this).parent().prepend($('<div class="icon-arm"></div>'));
          }
          $(this).parent().prepend($('<div class="icon '+word+'"></div>'));
          $(this).parent().addClass(word);
        }
      });

      $('.doc-body table').addClass('table table-striped');

});