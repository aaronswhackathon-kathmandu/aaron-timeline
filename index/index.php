<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Aaron Swartz Timeline</title>
    <link rel="stylesheet" href="css/example.css" />
</head>
<script>
	$(window).scroll(function () { 
	//Get the id of element(div) that is currently in view
		var inview = $('div:in-viewport:first').attr('id');

		//Define titles
		if (inview == '1'){

		var newtitle = 'Home'

		} else if (inview == '2') {

		var newtitle = 'About us'

		} 

		//Lets rename the page title
		document.title = 'Orginal Site Title |' + newtitle;
	});
	
	$(document).ready(function(){
			$('.image').click(function(){
				$(this).hide(1000);
			});
		});
		
	function click_bahira()
	{
	document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'
	}	
	
	function lightbox_nikalne()
	{
	document.getElementById('light').style.display='block'; document.getElementById('fade').style.display='block'
	}
</script>
<body>
    <h1>Aaron Swartz Timeline</h1>
    
    <div class="front scroll">
		<div id="6" class="box">	
			<div class="image" onclick = "lightbox_nikalne();"><img src="images/img.png"></div>
			<div id="light" class="white_content">information about birth of Aaron Swartz</div>
			<div id="fade" onclick = "click_bahira()" class="black_overlay"></div>
		</div>
		
		<div id="1" class="box">
			<div class="image" onclick = "lightbox_nikalne();"><img src="images/img0.jpg"></div>
			<div id="light" class="white_content">Information about schooling</div>
			<div id="fade" onclick = "click_bahira();" class="black_overlay"></div>
			<div class="caption"> A genius is born</div>
		</div>
		
		<div id=2" class="box">
			<div class="image" onclick = "lightbox_nikalne();"><img src="images/img1.jpg"></div>
			<div id="light" class="white_content"> </div>
			<div id="fade" onclick = "click_bahira();" class="black_overlay"></div>
			<div class=" caption"> Hello World</div>
		</div>
		
		<div id="3" class="box">	
			<div class="image" onclick = "lightbox_nikalne();"><img src="images/img2.jpg"></div>
			<div id="light" class="white_content"> </div>
			<div id="fade" onclick = "click_bahira();" class="black_overlay"></div>
   		<div class=" caption"> Hello World</div>
		</div>
		
		<div id="4" class="box">	
			<div class="image" onclick = "lightbox_nikalne();"><img src="images/img3.jpg"></div>
			<div id="light" class="white_content"></div>
			<div id="fade" onclick = "click_bahira();" class="black_overlay"></div>
   		<div class=" caption"> Hello World</div>
		</div>
		
		<div id="5" class="box">
	
			<div class="image" onclick = "lightbox_nikalne();"><img src="images/img4.jpg"></div>
			<div id="light" class="white_content"></div>
			<div id="fade" onclick = "click_bahira();" class="black_overlay"></div>
			<div class=" caption"> Hello World</div>
		</div>
		
		
		
    </div>
	

    <script type="text/javascript" src="../libs/jquery.min.js"></script>
    <script type="text/javascript" src="../dist/js/jquery.jInvertScroll.js"></script>
	<script src="jquery.viewport.js" type="text/javascript"></script>
    <script type="text/javascript">
    (function($) {
        $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
            {
            height: 6000,                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
            onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                console.log(percent);
            }
        });
    }(jQuery));
	
	
    </script>
</body>
</html>
