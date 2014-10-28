<? include('head.php');?>

<style>
	body, html{
		background: #201b0e;
		color: #cfcdb4;
		font-family: 'Open Sans', sans-serif;
		font-size: 14px;
	}
	
	.mockFolio h1, h2, h3, h4, h5{
		font-family: 'Open Sans', sans-serif;
	}
	
	.mockFolio h1{
		font-weight: bold;
	}
	
	.mockFolio a{
		color: #ea9f3e;
	}
	
		.mockFolio a:hover{
			color: #af9671;
		}
		
	.mockfolio p{
		color: #cfcdb4;
		line-height: 20px;
		font-weight: 200;
	}

	.logo{
		margin: 16px 0;
		text-align: left;
		padding: 0;
	}
		.logo span{
			display: table-cell;
			vertical-align: middle;
			padding: 0 10px;
			margin: 0;
		}
		
		.logo h1{
			display: inline;
			text-shadow: 3px 3px 3px rgba(0,0,0,.75);
			margin: 0;
			font-size: 30px;
		}
		
		.logo h2{
			margin: 0;
			font-style: italic;
			font-size: 18px;
		}
		
	.nav ul{
		padding: 0;
		height: 90px;
		text-align: right;
	}
	
		.nav ul li{
			display: inline-block;
			margin: 0 16px;
			line-height: 55px;
		}
		.nav ul li a{
			color: #af9671;
		}
		.nav ul li a:hover{
			color: #ea9f3e;
		}
		
	.mockFolio h2{
		color: #ea9f3e;
		font-weight: bold;
		font-size: 18px;
		text-shadow: 3px 3px 3px rgba(0,0,0,.75);
	}
		.mockFolio h2 i{
			text-shadow: none;
			position: relative;
			top: 5px;
		}
		
		.mockFolio .bottomSection h2{
			margin-top: 40px;
			margin-bottom: 25px;
			text-transform: uppercase;
			font-weight: 500;
		}
		
		.mockFolio .bottomSection h2 i{
			margin-right: 12px;
		}
	
	.topSection{
		background-color: #362914;
		border-bottom: #594522 1px solid;
		background-image: url('img/texture.jpg');
		background-size: contain;
		padding-bottom: 22px;
	}
	
	.middleSection{
		padding-bottom: 22px;
	}
		
		.middleSection h2{
			margin: 25px 0;
			text-transform: uppercase;
			font-size: 18px;
			font-weight: 500;
			margin-left: 10px;
		}
	
	.portfolioItem{
		padding: 0;
		margin: 0 auto;
	}

		.portfolioItem img{
			max-width: 100%;
		}
		
		@media only screen and (max-width : 768px){
			.portfolioItem img{
				width: 100%;
			}
		}
		
		.portfolioItem h3{
			color: #af9671;
			font-weight: 200;
			margin-top: 4px;
			margin-bottom: 0;
			font-size: 14px;
			margin-left: 4px;
		}
		.portfolioItem h4{
			margin: 0;
			font-weight: 200;
			margin-bottom: 26px;
			font-size: 13px;
			margin-left: 4px;
		}
	
	.bottomSection{
		background: #2d2413;
		border-top: #594522 1px solid;
	}
	
		.bottomSection div > div{
			padding: 0 20px 0 0;
		}
		
		.bottomSection ul{
			padding: 0;
		}
		
		.bottomSection ul li{
			list-style: none;
			font-size: 14px;
			margin-bottom: 15px;
		}
		
		.bottomSection ul li a i{
			color: #ea9f3e;
			margin-right: 5px;
		}
		
		.bottomSection ul li a{
			color: #af9671;
		}
		
		.bottomSection h3{
			color: #af9671;
			margin: 0;
			font-size: 14px;
			font-weight: 400;
		}
		
		.bottomSection p{
			margin-top: 0;
			margin-bottom: 2em;
		}
	
	.grid-100{
		max-width: 960px;
	}
	
	.nav{
		float: right;
	}
	
	#hireMe{
		float: left;
		padding: 10px 20px 10px 0;
	}
	.marginAuto{
		margin: 0 auto;
	}
	
	.mockFolio footer{
		
	}
</style>

<body class="mockFolio">
	    
     <section class="grid-parent topSection" id="">
		 <div class="header grid-100 marginAuto">
			 <div class="grid-50 logo">
			 	<span>
			 		<img src="img/sunLogo.png">
			 	</span>
			 	<span>
			       	<h1>Me Myself & I</h1>
				 	<h2>web & graphic design portfolio</h2>
			 	</span>
			 </div>
			 
			 <div class="grid-50 nav">
			 	<ul>
			      	<li><a href="#">work</a></li>
			 		<li><a href="#">services</a></li>
			 		<li><a href="#">contact me</a></li>
			 	</ul>
			 </div>
		 </div>
		 
		 <div class="clearfix"></div>
		 
		 <div class="headerText grid-100 marginAuto">
		 	<div class="grid-50">
		 		<h2>About Me</h2>
		 		<p>Your welcome message or “about me” text will go here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis posuere enim. Etiam ipsum odio, interdum quis lobortis eu, consequat non orci. Proin dapibus pretium augue non convallis. Aliquam sit amet nisi nec arcu bibendum imperdiet.</p>

<p>Duis eleifend accumsan ligula, suscipit viverra mi tempus sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam diam felis, convallis a pharetra at, tristique ac ipsum. Maecenas viverra mollis est quis venenatis. Duis tincidunt lorem id augue congue adipiscing.</p>

<p>Nunc et urna et magna aliquam hendrerit eu sit amet arcu. Aenean tempus sapien sagittis massa gravida id cursus lacus semper. Aliquam erat volutpat. In scelerisque, purus eu mollis laoreet, nisl elit commodo mi, non dapibus orci ipsum id dui.</p>
		 	</div>
		 	
		 	<div class="grid-50">
		 		<h2>Looking for a Designer?</h2>
		 		<p>I am available for freelance projects. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis posuere enim. Etiam ipsum odio, interdum quis lobortis eu, consequat non orci. Proin dapibus pretium augue non convallis. Aliquam sit amet nisi nec arcu bibendum imperdiet. Duis eleifend accumsan ligula, suscipit viverra mi tempus sed.</p>
		 		
		 		<img src="img/hireme.png" id="hireMe">
		 		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis posuere enim. Etiam ipsum odio, interdum quis lobortis eu, consequat non orci.</p>

				<p>email: <a href="#">mymail@mydomain.com</a></p>
		 		
		 	</div>
		 </div>
     </section>
     
     <section class="grid-100 middleSection marginAuto">
     	<h2>My Work</h2>
     	<div class="grid-33 portfolioItem">
     		<img src="img/portfolioItem1.jpg">
     		<h3>Project Title</h3>
     		<h4>Project description and date</h4>
     	</div>
     	<div class="grid-33 portfolioItem">
     		<img src="img/portfolioItem2.jpg">
     		<h3>Project Title</h3>
     		<h4>Project description and date</h4>
     	</div>
     	<div class="grid-33 portfolioItem">
     		<img src="img/portfolioItem3.jpg">
     		<h3>Project Title</h3>
     		<h4>Project description and date</h4>
     	</div>
     	<div class="grid-33 portfolioItem">
     		<img src="img/portfolioItem4.jpg">
     		<h3>Project Title</h3>
     		<h4>Project description and date</h4>
     	</div>
     	<div class="grid-33 portfolioItem">
     		<img src="img/portfolioItem5.jpg">
     		<h3>Project Title</h3>
     		<h4>Project description and date</h4>
     	</div>
     	<div class="grid-33 portfolioItem">
     		<img src="img/portfolioItem6.jpg">
     		<h3>Project Title</h3>
     		<h4>Project description and date</h4>
     	</div>
     	<div class="grid-33 portfolioItem">
     		<img src="img/portfolioItem7.jpg">
     		<h3>Project Title</h3>
     		<h4>Project description and date</h4>
     	</div>
     	<div class="grid-33 portfolioItem">
     		<img src="img/portfolioItem8.jpg">
     		<h3>Project Title</h3>
     		<h4>Project description and date</h4>
     	</div>
     	<div class="grid-33 portfolioItem">
     		<img src="img/portfolioItem9.jpg">
     		<h3>Project Title</h3>
     		<h4>Project description and date</h4>
     	</div>
     </section> <!-- end middleSection -->
     
     <section class="grid-parent bottomSection">
     	<div class="grid-100 marginAuto">
	     	<div class="grid-33">
	     		<h2><i class="fa fa-pencil fa-2x"></i> Services</h2>
	     		
	     		<h3>Web Design</h3>
	     		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis posuere enim. Etiam ipsum odio, interdum quis lobortis eu, consequat non orci. Proin dapibus pretium augue non 
	convallis.</p>
	
				<h3>Web Development</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis posuere enim. Etiam ipsum odio, interdum quis lobortis eu, consequat non orci. Proin dapibus pretium augue non 
	convallis. </p>
	
				<h3>Graphic Design</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis posuere enim. Etiam ipsum odio, interdum quis lobortis eu, consequat non orci. Proin dapibus pretium augue non 
	convallis.</p>
	     	</div>
	     	
	     	<div class="grid-33">
	     		<h2><i class="fa fa-twitter fa-2x"></i> Tweets</h2>
	     		
	     		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante.  about 3 hours ago</p>
	
		 		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante.  about 3 hours ago</p>
		 		
		 		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante.  about 3 hours ago</p>
		 		
		 		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante.  about 3 hours ago</p>
		 		
		 		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante.  about 3 hours ago</p>
	     	</div>
	     	
	     	<div class="grid-33">
	     		<h2><i class="fa fa-envelope fa-2x"></i> Contact</h2>
	     		
	     		<p>If you’re interested in getting a quote for a 
	project or if you just have some questions, please email me with the details and I will get in touch with you as soon as possible. you can also find me on several social networking sites, my 
	profiles are listed below.</p>
	
				<p>Email: <a href="#">mymail@mydomain.com</a></p>
				
				<ul class="contact">
					<li><a href="#"><i class="fa fa-twitter-square fa-2x"></i> twitter</i></a></li>
					<li><a href="#"><i class="fa fa-instagram fa-2x"></i> instagram</i></a></li>
					<li><a href="#"><i class="fa fa-dribbble fa-2x"></i> dribbble</i></a></li>
				</ul>
	     	</div>
     	</div> <!-- /.bottomSection -->
     </section>
     
     <footer class="grid-100">
     	<p>Copyleft MeMyself&I, 2014</p>
     </footer>
</body>