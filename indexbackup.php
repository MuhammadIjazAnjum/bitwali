<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- header -->
	<div class="header">
		<div class="row heateradds">
			<div id="leftadd" class=" col-m-4 ">Muhammad Ijaz Anjum</div>
			<div id="centeradd" class=" col-m-4">center text </div>
			<div id="rightadd" class="col-m-4">Muhammad Ijaz Anjum</div>
		</div>
		<!-- <div class="w3-content w3-section" style="max-width:600px; max-height:300px;"> -->
			  <!-- <img class="bwSlides" src="one.jpg" style="width:100%"> -->
			  <!-- <img class="bwSlides" src="two.jpg" style="width:100%"> -->
			  <!-- <img class="bwSlides" src="three.jpg" style="width:100%"> -->
			  <!-- <img class="bwSlides" src="four.jpg" style="width:100%"> -->
		<!-- </div> -->
			<!-- <h1 id="sitetag">Header of the Biwali</h1> -->
			<!-- slide div -->
	 <!-- End of <div class="header"> -->
		<h3 id="slideid">bitwali</h3>
	  <!-- top menu -->
		<ul class="topnav " >
		  <li><a class="active" href="#home">Home</a></li>
		  <li><a href="#news">News</a></li>
		  <li><a href="#contact">Contact</a></li>
		  <!-- <li class="right"><a href="#about">About</a></li> -->
		</ul>
	</div> 
		<!-- End of header -->
<!-- content row-->
	<div class="row">
<!-- left side bar -->
		<div class="col-3 col-m-3 leftmenu">
	
		  <ul>
			<li>The Flight</li>
			<li>The City</li>
			<li>The Island</li>
			<li>The Food</li>
		  </ul>
		</div>
<!-- main content -->
		<div class="col-6 col-m-9 maincontent">
		  <h1>bitwali </h1>
		  <p>the main content of the bitwali site.</p>
		</div>
<!-- right side bar -->
		<div class="col-3 col-m-12">
		  <div class="rightsidebar">
			<h2>Time Widget</h2>
			<p>the content of time widget.</p>
			<h2>Box Widget</h2>
			<p>Modal Box content.</p>
			
		  </div> 
		</div> 

	</div>
<!-- end of content row -->
<!-- footer -->
	<div class="footer">
	
	  
	  <!-- comment cards -->
	  <div class="w3-content w3-section" style="max-width:40%; height:250px;">
		<div class="w3-container commentSlides   ">
			<div class="w3-card-4" style="width:75%; margin:auto; min-width:300px;">
				<header class="w3-container w3-light-grey">
				  <h3>John Doe</h3>
				</header>
				<div class="w3-container">
				  <p>1 new friend request</p>
				  <hr>
				  <img src="<?php echo IMAGES.'/one.jpg';?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px">
				  <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
				</div>
				<button class="w3-button w3-block w3-dark-grey">+ Connect</button>
			</div>
		</div>
		
		<div class="w3-container commentSlides">
			<div class="w3-card-4" style="width:75%; margin:auto; min-width:300px;">
				<header class="w3-container w3-light-grey">
				  <h3>one</h3>
				</header>
				<div class="w3-container">
				  <p>1 new friend request</p>
				  <hr>
				  <img src="one.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px">
				  <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
				</div>
				<button class="w3-button w3-block w3-dark-grey">+ Connect</button>
			</div>
		</div>
		
		<div class="w3-container commentSlides">
			<div class="w3-card-4" style="width:75%; margin:auto; min-width:300px;">
				<header class="w3-container w3-light-grey">
				  <h3>two</h3>
				</header>
				<div class="w3-container">
				  <p>1 new friend request</p>
				  <hr>
				  <img src="IMAGES\one.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px">
				  <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
				</div>
				<button class="w3-button w3-block w3-dark-grey">+ Connect</button>
			</div>
		</div>
		</div>
		<!-- end of comment card -->
		<hr>
		
		<div class="w3-xxlarge ">
			<a href="#"><i class="fa fa-home w3-hover-opacity"></i></a>
			<a href="https://www.youtube.com/channel/UCBH2_ROKyqXZc7De3EI9-cQ">	<i class="fa fa-facebook-official w3-hover-opacity"></i></a>
			<a href="https://www.facebook.com/muhammadijaz.anjum.1"><i class="fa fa-youtube w3-hover-opacity"></i></a>
			
			
			
		</div>
	</div>  
<!-- end of footer -->
<!-- automatic animation script -->
<script>
	 // var setIndex = 0; 
	 // showSlides(); 

	 // function showSlides() { 
		//  var i; 
		//  var x = document.getElementsByClassName("bwSlides"); 
		//  for (i = 0; i < x.length; i++) { 
		//     x[i].style.display = "none";   
		//  } 
		//  setIndex++; 
		//  if (setIndex > x.length) {setIndex = 1}     
		//  x[setIndex-1].style.display = "block";   
		//  setTimeout(showSlides, 3000); // Change image every 2 seconds 
	 // } 
	var commentIndex = 0;
	showComments();

	function showComments() {
		var i;
		var x = document.getElementsByClassName("commentSlides");
		for (i = 0; i < x.length; i++) {
		   x[i].style.display = "none";  
		}
		commentIndex++;
		if (commentIndex > x.length) {commentIndex = 1}    
		x[commentIndex-1].style.display = "block";  
		setTimeout(showComments, 2000); // Change image every 2 seconds
	}
</script>
</body>
</html>
