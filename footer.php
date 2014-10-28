<footer class="grid-100 footer">
	<div class="grid-100">
		<address><small>&copy; 2014 <a href="mailto:alex@alexgoodwinmedia.com">Alex Goodwin Media</a> // Boulder, Colorado</small></address>
	</div>
</footer>

<!-- scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/main.js"></script>

<!-- custom -->
<script>
	$(document).ready(function(){
	
		$("nav").sticky({topSpacing:0});
		$("nav").css({height: "auto"});
	   
	   $('#scrollToTop').hide();
	   
	   // hamburger nav
	   $("a.hamburger").click(function(event) {
			event.preventDefault();
			$("nav ul").slideToggle(500);
			$('#undefined-sticky-wrapper').css({height: 'auto !important'});
		});
	   
	   // controls full-screen of home screen banner
	   bannerResize();
	   overviewResize();
	   verticallyCenter();
	});
	
	$(window).resize(function(){
		bannerResize();
		overviewResize();
		verticallyCenter();
	});
	
	function bannerResize(){
		$('#banner').css({minHeight: $(window).height()});
	   
	   var h1margin = ($('#banner').height() - $('#banner h1').height())/2;
	   $('#banner h1').css({marginTop: h1margin});
	}
	
	function overviewResize(){
		$('section.overview').each(function(){
			var windowHeight = $(window).height();
			if($(this).outerHeight() < windowHeight){
				$(this).css({height: windowHeight - $('nav').outerHeight()});
			}
		})
	}
	
	function verticallyCenter(){
		$('*.verticallyCenter').each(function(){
			if($(this).prev().prop('tagName') == 'H2'){
				var m = ($(this).parent().height() - $(this).prev('h2').outerHeight() - $(this).height())/2;
			}
			else{
				var m = ($(this).parent().height() - $(this).height())/2;	
			}
			$(this).css({
				marginTop: m,
				marginBottom: m
			});
		})
	}
	
	$(window).scroll(function(){
	   if($(window).scrollTop() >= $('nav').position().top){
	       $('#scrollToTop').show();
	   }
	   else{
	       $('#scrollToTop').hide();
	   }
	});
	
	// smooth anchor scrolling
	function scrollToElement( target ) {
		var topoffset = $('nav').outerHeight();
		var speed = 400;
		var destination = jQuery( target ).offset().top - topoffset;
		jQuery( 'html:not(:animated),body:not(:animated)' ).animate( { scrollTop: destination}, speed, function() {
		    window.location.hash = target;
		});
		return false;
	}
</script>