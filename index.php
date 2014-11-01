<? include('head.php');?>
<body class="">
    
    <div id="banner" class="grid-100 grid-parent">
    	<h1>Alex Goodwin</h1>
    	<div class="center">
    		<span class="whiteLine"></span>
    			<h2>Digital Portfolio</h2>
    		<span class="whiteLine"></span>
    	</div>
    	
    	<div class="bottomDiv">
			<a href="javascript: scrollToElement('#dm1');" class="scrollDown"><img src="img/scrollDown_white.png"></a>
    	</div>
    </div>
    
    <div class="grid-100 grid-parent">
    
		<? include('nav.php');?>
	    
	     <section class="grid-100 grid-parent overview" id="dm1">
	    	<div class="paraBackground zoom" style="background-image: url('img/dark_wood.jpg');"></div>
	    
	    	<h2>Fall 2014: Digital Media 1</h2>

			<div class="grid-100 verticallyCenter">
		    	<div class="grid-55 prefix-5">
		    		<img src="img/iPhone.png" class="responsiveLeft">
		    	</div>
		    	
		    	<div class="grid-30 prefix-5 suffix-5 darkTrans responsiveBottom verticallyCenter">
		    		<ul>
						<li><h3><a href="#">Belief Project</a></h3></li>
						<li><h3><a href="#">Digital Media Portal</a></h3></li>
						<li><h3>Photoshop</h3></li>
		    		</ul>
					<!-- <img src="img/shadow.png" style="width: 100%;"> -->
		    	</div>
			</div>
	
	    	<div class="bottomDiv">
				<a href="javascript: scrollToElement('#advWeb');" class="scrollDown"><img src="img/scrollDown_white.png"></a>
	    	</div>
	    </section>
	    
	    <section class="grid-100 grid-parent overview" id="advWeb">
	    	<div class="paraBackground zoom" style="background-image: url('img/mountain.jpeg');"></div>
	    
	    	<h2 style="color: #111;">Fall 2014: Advanced Web Design</h2>
	    
	    	<div class="grid-100 verticallyCenter">
		    	<div class="grid-60 prefix-5">
		    		<img src="img/mockup.png" class="responsiveRight">
		    	</div>
		    	
		    	<div class="grid-25 prefix-5 suffix-5 darkTrans responsiveTop verticallyCenter">
		    		<ul>
						<li><h3><a href="html5.php">About Me</a></h3></li>
						<li><h3><a href="CSS.php">Lorax Project</a></h3></li>
						<li><h3>This Portfolio</h3></li>
		    		</ul>
		    	</div>
		    </div>
			
			<div class="bottomDiv">
				<a href="javascript: scrollToElement('#cusnowboarding');" class="scrollDown"><img src="img/scrollDown_white.png"></a>
	    	</div>
	
	    </section>
	    
	    <section class="grid-100 grid-parent overview" id="cusnowboarding">
	    	<div class="paraBackground" style="background-image: url('img/contemplation.jpg'); background-size: cover;"></div>
	    	
	    	<h2 style="color: #111;">CU Snowboard Team</h2>
	    	
			<div class="grid-100 verticallyCenter">
		    	<div class="grid-60 prefix-5">
		    		<img src="img/cusnowboarding.png" class="responsiveLeft">
		    	</div>
		    	
		    	<div class="grid-25 prefix-5 suffix-5 darkTrans responsiveBottom">
		    		<ul>
						<li><h3>President - 2013-2015</h3></li>
						<li><h3>300% Team Growth</h3></li>
						<li><h3>Web, Graphic Design</h3></li>
		    		</ul>
		    	</div>
			</div>
	    	
	    	<div class="bottomDiv">
				<a href="javascript: scrollToElement('#theStrangelyPossibles');" class="scrollDown"><img src="img/scrollDown_black.png"></a>
	    	</div>
	    </section>
	    
	    <section class="grid-100 grid-parent overview" id="theStrangelyPossibles">
	    	<div class="paraBackground" style="background-image: url('img/strangelypossibles.jpg'); background-size: cover; background-position: center top;"></div>
   	
	    	<div class="grid-25 prefix-70">
		    	<h2 style="color: #111;">The Strangely Possibles</h2>
	    	</div>

			<div class="grid-100 verticallyCenter">	 		    	
		    	<div class="grid-25 prefix-70 suffix-5 darkTrans responsiveTop verticallyCenter">
		    		<ul>
						<li><h3>Web & Graphic Design</h3></li>
						<li><h3>Online Media Publishing</h3></li>
						<li><h3>Digital Music Distribution</h3></li>
		    		</ul>
		    	</div>
			</div>
	    	
	    	<div class="bottomDiv">
				<a href="javascript: scrollToElement('#bubbas');" class="scrollDown"><img src="img/scrollDown_black.png"></a>
	    	</div>
	    </section>
	    
	    <section class="grid-100 grid-parent overview" id="bubbas">
	    	<div class="paraBackground" style="background-image: url('img/bubbas.jpg'); background-size: cover; background-position: center top;"></div>
	    	
	    	<div class="grid-25 prefix-70">
		    	<h2>Bubba's Sulky Lounge</h2>
	    	</div>
	    	
	    	<div class="grid-25 prefix-70 suffix-5 darkTrans responsiveBottom">
	    		<ul>
					<li><h3>Web & Graphic Design</h3></li>
					<li><h3>Online Media Publishing</h3></li>
					<li><h3>Digital Music Distribution</h3></li>
	    		</ul>
	    	</div>
	    </section>
	    
    </div>
    
    <? include('footer.php');?>
    
    <script>
    	$(document).ready(function(){
	    	$(window).scroll(function(){
	    		var scrollTop = $(window).scrollTop();
/* 	    		var navHeight = $('nav').height(); */
		    	
		    	// parallax backgrounds
		    	$('.paraBackground').each(function(){
		    		var offset = $(this).parent().offset().top - scrollTop;
			    	$(this).css({backgroundPositionY: -offset/4});
		    	})
		    	
		    	// side-scrolling parallax
		    	$('*.responsiveLeft').each(function(){
		    		var parentWidth = $(this).parent().width();
		    		var fromTop = $(this).offset().top - scrollTop;
		    		$(this).css({right: (fromTop- $(this).height()/2)/3});
		    	})
		    	$('*.responsiveRight').each(function(){
			    	var parentWidth = $(this).parent().width();
		    		var fromTop = $(this).offset().top - scrollTop;
		    		$(this).css({left: (fromTop- $(this).height()/2)/3});
		    	})
		    	
		    	/*
// top/bottom-scrolling parallax
		    	$('*.responsiveTop').each(function(){
			    	var parentHeight = $(this).parent().outerHeight();
			    	var fromTop = $(this).offset().top - scrollTop;
			    	$(this).css({bottom: (fromTop- $(this).height()/2)/3});
		    	})
		    	$('*.responsiveBottom').each(function(){
			    	var parentHeight = $(this).parent().outerHeight();
			    	var fromTop = $(this).offset().top - scrollTop;
			    	$(this).css({top: (fromTop- $(this).height()/2)/3});
		    	})
*/
	    	});
    	});
    
    </script>
    
    </body>
</html>
