<html>
	<head>
		<title>CustomOZer</title>
		
		<style>
			*{
				padding: 0;
				margin: 0;
				box-sizing: border-box;
			}
			section{
				height: 100vh;
				width: 100vw;
				border: 1px black solid;
				position: relative;
			}
			
			.half{
				display: inline-block;
				width: 50%;
				height: 100%;
				padding-top: 264px;
				float: left;
				text-align: center;
			}
			
			#home h1{
				text-transform: uppercase;
				font-family: sans-serif;
				font-size: 20px;
				margin: 10px 0;
			}
			
			section.optionsSection{
				background: orange;
				padding: 50px 0 50px 50px;
			}
			
			section.optionsSection div{
				float: left;
			}
			
			.boardPreview{
				height: 668px;
				width: 362px;
				margin-right: 25px;
			}
			
				.boardPreview img{
					padding-top: 29.5px;
				}
			
			.buildTitle{
				height: 82px;
				width: 462px;
				padding: 28px;
				margin-bottom: 25px;
			}
			
				.buildTitle h2{
					text-transform: uppercase;
					font-family: sans-serif;
					text-align: center;
				}
				
			.boardOptions{
				height: 560px;
				width: 460px;
			}
			
			section div.sideNav{
				position: relative;
				left: 24px;
				width: 100px;
				height: 668px;
				top: -107px;
			}
			
				.sideNav ul{
					list-style: none;
					padding: 0;
					margin: 0;
				}
				
				.sideNav ul li{
					background: rgba(255,255,255,.5);
					width: 100px;
					height: 95.42px;
					margin: 0 auto;
					border: black 1px solid;
					text-indent: -9999px;
				}
				
				.sideNav ul li.active{
					background: white;
				}
		</style>
		
	</head>
	<body>
		
		<!-- FIRST PAGE -->
		<section id="home" class="snap">
			<div class="half">
				<img src="http://placehold.it/200x200">
				<h1>About Oz Snowboards</h1>
			</div>
			<div class="half">
				<img src="http://placehold.it/200x200">
				<h1>Build a Board</h1>
			</div>
		</section>
		
		<!-- LENGTH -->
		<section id="boardLength" class="optionsSection snap">
			<div class="boardPreview">
				<img src="snowboardIcon.png">
			</div>
			<div class="buildTitle">
				<h2>Select Board Length</h2>
			</div>
			<div class="boardOptions">
				<img src="http://placehold.it/460x560">
			</div>
			<div class="sideNav">
				<? include('sideNav.php');?>
			</div>
		</section>
		
		<!-- SHAPE -->
		<section id="boardShape" class="optionsSection snap">
			<div class="boardPreview">
				<img src="snowboardIcon.png">
			</div>
			<div class="buildTitle">
				<h2>Select Board Shape</h2>
			</div>
			<div class="boardOptions">
				<img src="http://placehold.it/460x560">
			</div>
			<div class="sideNav">
				<? include('sideNav.php');?>
			</div>
		</section>
		
		<!-- FLEX -->
		<section id="boardFlex" class="optionsSection snap">
			<div class="boardPreview">
				<img src="snowboardIcon.png">
			</div>
			<div class="buildTitle">
				<h2>Select Board Flex</h2>
			</div>
			<div class="boardOptions">
				<img src="http://placehold.it/460x560">
			</div>
			<div class="sideNav">
				<? include('sideNav.php');?>
			</div>
		</section>
		
		<!-- DESIGN -->
		<section id="boardDesign" class="optionsSection snap">
			<div class="boardPreview">
				<img src="snowboardIcon.png">
			</div>
			<div class="buildTitle">
				<h2>Select Board Design</h2>
			</div>
			<div class="boardOptions">
				<img src="http://placehold.it/460x560">
			</div>
			<div class="sideNav">
				<? include('sideNav.php');?>
			</div>
		</section>
		
		<!-- TIP/TAIL -->
		<section id="boardTipTail" class="optionsSection snap">
			<div class="boardPreview">
				<img src="snowboardIcon.png">
			</div>
			<div class="buildTitle">
				<h2>Select Board Tip/Tail</h2>
			</div>
			<div class="boardOptions">
				<img src="http://placehold.it/460x560">
			</div>
			<div class="sideNav">
				<? include('sideNav.php');?>
			</div>
		</section>
		
		<!-- TEXTURE -->
		<section id="boardTexture" class="optionsSection snap">
			<div class="boardPreview">
				<img src="snowboardIcon.png">
			</div>
			<div class="buildTitle">
				<h2>Select Board Texture</h2>
			</div>
			<div class="boardOptions">
				<img src="http://placehold.it/460x560">
			</div>
			<div class="sideNav">
				<? include('sideNav.php');?>
			</div>
		</section>
		
		<!-- TEXT -->
		<section id="boardText" class="optionsSection snap">
			<div class="boardPreview">
				<img src="snowboardIcon.png">
			</div>
			<div class="buildTitle">
				<h2>Select Board Text</h2>
			</div>
			<div class="boardOptions">
				<img src="http://placehold.it/460x560">
			</div>
			<div class="sideNav">
				<? include('sideNav.php');?>
			</div>
		</section>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/jquery.scrollstop.js"></script>
		<script src="js/jquery.scrollsnap.js"></script>
		<script>
			$(document).ready(function() {
			    $(document).scrollsnap({
			        snaps: '.snap',
			        proximity: 384,
			        latency: 100
			    });
			});
		</script>
	</body>
</html>
