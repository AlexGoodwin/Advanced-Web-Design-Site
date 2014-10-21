<? include('head.php');?>
<body class="">
    
    <div id="banner" class="grid-100 grid-parent">
    	<h1>Alex Goodwin Media</h1>
    	
    	<div class="grid-100 center">
    		<a href="javascript: scrollToElement('#content');" class="scrollDown"></a>
    	</div>
    </div>
    
    <div class="grid-100 grid-parent">
    
		<? include('nav.php');?>
		
		<section class="grid-100 grid-parent" id="content" style="min-height: 500px;">
			<div class="paraBackground zoom" style="background-image: url('img/keyboard.jpg');"></div>
			
			<div id="mouseLocation">-1, -1</div>
			<div id="elementLocation">-1, -1</div>
			
			<ul class="vertBars center">
				<? 
				for($i=0;$i<20;$i++){
					echo '<li class="vertBars" id="vertBars'.$i.'"></li>';	
				}
				?>
			</ul>
		</section>
		
    </div>

<? include('footer.php');?>

<script>
	$(document).ready(function(){
	
	var currentMousePos = {x : -1, y : -1};
	
	$('.vertBars li').on('mouseover', function(){
		var masterIndex = $(this).index();
		
		$('.vertBars li').each(function(){
			var thisIndex = $(this).index();
			
			
			$(this).css({height: 100 - (Math.abs(masterIndex - thisIndex)*10), width: Math.random()*50});
		});
	});
	
	$(document).mousemove(function(event){
        currentMousePos.x = event.pageX;
        currentMousePos.y = event.pageY;
        
        $('#mouseLocation').text(currentMousePos.x + ', ' + currentMousePos.y);
    });
		
	});
</script>