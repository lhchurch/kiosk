<!DOCTYPE html>
<html lang="en">
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=1">
        <meta name="format-detection" content="telephone=no" />

		
<link href="css/css" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" type="text/css" href="css/groups.css">
		<link rel="stylesheet" type="text/css" href="css/forms.css">
        <link rel="stylesheet" type="text/css" href="css/buttons-min.css">
        <link rel="stylesheet" type="text/css" href="css/kiosk.css">
		
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.sortable.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript" src="js/groups.js"></script>
        <script type="text/javascript" src="js/screensaver.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script> 
<script> 
    $(document).ready(function() { 
        $('#infoForm1, #infoForm2, #infoForm3, #infoForm4, #infoForm5, #infoForm6, #infoForm7, #infoForm8, #infoForm9, #infoForm10, #infoForm11, #infoForm12, #infoForm13, #infoForm14, #infoForm15, #infoForm16, #infoForm17, #infoForm18, #infoForm19, #infoForm20, #infoForm21, #infoForm22, #infoForm23, #infoForm24').ajaxForm(function() { 
            $('#infoForm1')[0].reset();
            $('#infoForm2')[0].reset();
            $('#infoForm3')[0].reset();
            $('#infoForm4')[0].reset();
            $('#infoForm5')[0].reset();
            $('#infoForm6')[0].reset();
            $('#infoForm7')[0].reset();
            $('#infoForm8')[0].reset();
            $('#infoForm9')[0].reset();
            $('#infoForm10')[0].reset();
            $('#infoForm11')[0].reset();
            $('#infoForm12')[0].reset();
            $('#infoForm13')[0].reset();
            $('#infoForm14')[0].reset();
            $('#infoForm15')[0].reset();
            $('#infoForm16')[0].reset();
            $('#infoForm17')[0].reset();
            $('#infoForm18')[0].reset();
            $('#infoForm19')[0].reset();
            $('#infoForm20')[0].reset();
            $('#infoForm21')[0].reset();
            $('#infoForm22')[0].reset();
            $('#infoForm23')[0].reset();
            $('#infoForm24')[0].reset();
           alert('LH Group Info Sent!');
        }); 
    }); 
</script> 


		<!--

		- Switch between grid and list view using the 'toGrid' and 'toList' methods
		- Use different stylings for grid and list views via the 'gridClass' and 'listClass' options
		- Sort by name and by area using sort buttons
		- Complex multi-dimensional checkbox filtering using the 'filter' method and custom click handlers
		- Fade-in "fail element" when filters return no elements.

		-->

		
		<title>Find a LH Group</title>
	
</head>
    <?php include('header.php'); ?>    
	<body>
	<section>
		
		<!-- BEGIN WRAPPER -->
		
		<div class="wrapper wf">
			
			<!-- Begin Controls -->
			
			<nav class="controls just">
				<div class="group" id="Sorts">
					<!--div class="button active" id="ToList"><i></i>List View</div>
					<div class="button" id="ToGrid"><i></i>Map View</div-->
                    <h3 class="title">LH Groups</h3>
				</div>
				<div class="group" id="Filters">
					<div class="drop_down wf">
						<span class="anim150">Meeting Day</span>
						<ul class="anim250">
							<li class="active" data-filter="all" data-dimension="day">All</li>
							<li data-filter="monday" data-dimension="day">Monday</li>
							<li data-filter="tuesday" data-dimension="day">Tuesday</li>
							<li data-filter="wednesday" data-dimension="day">Wednesday</li>
							<li data-filter="thursday" data-dimension="day">Thursday</li>
                            <li data-filter="friday" data-dimension="day">Friday</li>
                            <li data-filter="saturday" data-dimension="day">Saturday</li>
						</ul>
					</div>
					<div class="drop_down wf">
						<span class="anim150">Location</span>
						<ul class="anim250">
							<li class="active" data-filter="all" data-dimension="location">All</li>
                            <li data-filter="annapolis" data-dimension="location">Annapolis</li>
                            <li data-filter="brooklyn-park" data-dimension="location">Brooklyn Park</li>
                            <li data-filter="fort-meade" data-dimension="location">Fort Meade</li>
							<li data-filter="glen-burnie" data-dimension="location">Glen Burnie</li>
							<li data-filter="pasadena" data-dimension="location">Pasadena</li>
                            <li data-filter="severn" data-dimension="location">Severn</li>
						</ul>
					</div>
                    <div class="drop_down wf">
						<span class="anim150">Childcare</span>
						<ul class="anim250">
							<li class="active" data-filter="all" data-dimension="childcare">All</li>
							<li data-filter="yes" data-dimension="childcare">Yes</li>
							<li data-filter="no" data-dimension="childcare">No</li>
						</ul>
					</div>
				</div>
			</nav>
			
			<!-- End Controls -->
			
			<!-- Begin Groups -->
			
			<ul id="Groups" class="just list">
				
				<!-- "TABLE" HEADER CONTAINING SORT BUTTONS (HIDDEN IN GRID MODE)-->
				
				<div class="list_header">
					<div class="meta name active desc" id="SortByName">
						Name &nbsp;
						<span class="sort anim150 asc active" data-sort="data-name" data-order="desc"></span>
						<span class="sort anim150 desc" data-sort="data-name" data-order="asc"></span>	
					</div>
					<div class="meta day">Meeting Day</div>
					<div class="meta childcare">Childcare</div>
				</div>
				
				<!-- FAIL ELEMENT -->
				
				<div class="fail_element anim250">Sorry — we could not find any LH Groups matching matching these criteria</div>
				
                <!-- Begin list of LH Groups-->
				
                <li class="mix friday pasadena yes mix_all" data-name="Anderson" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openBeyer"><img src="images/leaders/Anderson.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Nelson and Eleanor Anderson</h2>
							<p><em>Pasadena</em></p>
                            <br><a href="#openAnderson"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Friday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
                
                <li class="mix wednesday glen-burnie yes mix_all" data-name="Beyer" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openBeyer"><img src="images/leaders/Beyer.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Bob and Faye Beyer</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openBeyer"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Wednesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
                
                <li class="mix thursday fort-meade yes mix_all" data-name="Billington" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openBillington"><img src="images/leaders/Billington.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Jason and Karen Billington</h2>
							<p><em>Fort Meade</em></p>
                            <br><a href="#openBillington"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Thursday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
                
                <li class="mix thursday pasadena yes mix_all" data-name="Bombard" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openBombard"><img src="images/leaders/Bombard.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Michael and Kristine Bombard</h2>
							<p><em>Pasadena</em></p>
                            <br><a href="#openBombard"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Thursday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
                
        <li class="mix thursday glen-burnie no mix_all" data-name="Brown" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openBrown"><img src="images/leaders/Brown.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Lisa Brown</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openBrown"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Thursday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
                
                <li class="mix tuesday brooklyn-park yes mix_all" data-name="Corbin" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openCorbin"><img src="images/leaders/Corbin.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Dave and Jamie Corbin</h2>
							<p><em>Brooklyn Park</em></p>
                            <br><a href="#openCorbin"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Tuesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
                
         <li class="mix thursday glen-burnie no mix_all" data-name="Costa" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openCosta"><img src="images/leaders/Costa.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Joey Costa</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openCosta"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Thursday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
                
             <li class="mix wednesday pasadena no mix_all" data-name="Curtin" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openCurtin"><img src="images/leaders/Curtin.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Paul Curtin</h2>
							<p><em>Pasadena</em></p>
                            <br><a href="#openCurtin"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Wednesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
                
                <li class="mix wednesday annapolis no mix_all" data-name="Ditzel" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openDitzel"><img src="images/leaders/Ditzel.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Art Ditzel</h2>
							<p><em>Annapolis</em></p>
                            <br><a href="#openDitzel"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Wednesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
                
                 <li class="mix saturday annapolis yes mix_all" data-name="Ditzel2" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openDitzel2"><img src="images/leaders/Ditzel.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Art Ditzel</h2>
							<p><em>Annapolis</em></p>
                            <br><a href="#openDitzel2"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Saturday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
                
                <li class="mix tuesday glen-burnie no mix_all" data-name="Feeney" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openFeeney"><img src="images/leaders/Feeney.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Timothy and Donna Feeney</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openFeeney"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Tuesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
				<li class="mix tuesday glen-burnie no mix_all" data-name="Foster" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openFoster"><img src="images/leaders/Foster.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Paul and Vicki Foster</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openFoster"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Tuesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
                
                
                <li class="mix wednesday severn yes mix_all" data-name="Hahn" style="display: block; opacity: 1;">
                <div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openHahn"><img src="images/leaders/Hahn.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Preston and Sarah Hahn</h2>
							<p><em>Severn</em></p>
                            <br><a href="#openHahn"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Wednesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>

                
            <li class="mix wednesday glen-burnie yes mix_all" data-name="Kinstler" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openKinstler"><img src="images/leaders/Kinstler.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Margarita Kinstler</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openKinstler"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Wednesday<br>9:30 AM</p>
					</div>
					<div class="meta childcare">
						<ul>
                            <li>Yes</li>
						</ul>
					</div>
				</li>

                
                
				<li class="mix thursday glen-burnie yes mix_all" data-name="Ridgely" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openRidgely"><img src="images/leaders/Ridgely.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Paul and Toni Ridgely</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openRidgely"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Thursday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
                
                
                <li class="mix wednesday glen-burnie no mix_all" data-name="Shaffer" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openShaffer"><img src="images/leaders/Shaffer.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Fred and Pam Shaffer</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openShaffer"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Wednesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
                
                <li class="mix monday glen-burnie no mix_all" data-name="Shibilsky" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openShibilsky"><img src="images/leaders/Shibilsky.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Diana Shibilsky</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openShibilsky"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Monday<br>7:30 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
                
                <li class="mix monday glen-burnie no mix_all" data-name="Silanskas" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openSilanskas"><img src="images/leaders/Silanskas.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Ron Silanskas</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openSilanskas"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Monday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
                
                
                <li class="mix tuesday  glen-burnie  no mix_all" data-name="Smith" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openCSmith"><img src="images/leaders/CSmith.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Carol Smith</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openCSmith"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Tuesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
                
                
				<li class="mix thursday glen-burnie yes mix_all" data-name="Smith" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openSmith"><img src="images/leaders/Smith.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Victor and Pearl Smith</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openSmith"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Thursday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
                <li class="mix thursday pasadena yes mix_all" data-name="Summers" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openSummers"><img src="images/leaders/Summers.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Steve and Lauren Summers</h2>
							<p><em>Pasadena</em></p>
                            <br><a href="#openSummers"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Thursday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
					</li>
            
                            <li class="mix wednesday glen-burnie no mix_all" data-name="Sylce" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openSylce"><img src="images/leaders/Sylce.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Linda Sylce</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openSylce"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Wednesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>No</li>
						</ul>
					</div>
				</li>
            
            
				<li class="mix wednesday glen-burnie yes mix_all" data-name="Thompson" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openThompson"><img src="images/leaders/Thompson.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>David Thompson</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openThompson"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Wednesday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
					</li>
       
        
        <li class="mix monday glen-burnie yes mix_all" data-name="Walters" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openWold"><img src="images/leaders/Walters.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Tim Walters</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openWalters"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Monday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
					</li>

 
        <li class="mix monday glen-burnie yes mix_all" data-name="Welch" style="display: block; opacity: 1;">
					<div class="meta name">
						<div class="img_wrapper loaded">
							<a href="#openWelch"><img src="images/leaders/Welch.jpg" onload="imgLoaded(this)"></a>
						</div>
						<div class="titles">
							<h2>Jeff Welch</h2>
							<p><em>Glen Burnie</em></p>
                            <br><a href="#openWelch"><p class="details">Details</p></a>
						</div>
					</div>
					<div class="meta day">
						<p>Monday<br>7:00 PM</p>
					</div>
					<div class="meta childcare">
						<ul>
							<li>Yes</li>
						</ul>
					</div>
				</li>
					</li>
    
				
			</ul>

		</div>

<!-- End list of groups & begin group details -->
        
         <div id="openAnderson" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Nelson and Eleanor Anderson</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Anderson.jpg">
            <p><b>Meeting Time:</b> Fridays at 7:00 PM
                <br><b>Location:</b> 1347 Old Mountain Road Pasadena, MD
                <br>
                <b>Phone Number:</b> (410) 570-2723
                <br>
                <b>Email:</b> nelson@minutemanpress.com
                <br>
                <b>Curriculum:</b> Crash The Chatterbox by Steven Furtick
                </p>
            
            <!-- form id="infoForm1" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="anderson">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>
        
    <div id="openBeyer" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Bob and Faye Beyer</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Beyer.jpg">
            <p><b>Meeting Time:</b> Wednesdays at 7:00 PM
                <br><b>Location:</b> Lighthouse Church, Green Room
                <br>
                <b>Phone Number:</b> (318) 816-1888
                <br>
                <b>Email:</b> beyer12@juno.com
                <br>
                <b>Curriculum:</b> Church Provided
                </p>
            
            <!-- form id="infoForm1" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="beyer">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>
        
        <div id="openBillington" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Jason and Karen Billington</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Billington.jpg">
            <p><b>Meeting Time:</b> Thursdays at 7:00 PM
                <br><b>Location:</b> 8901 Anderson Loop Fort Meade, MD 20755
                <br>
                <b>Phone Number:</b> (334) 806-7919
                <br>
                <b>Email:</b> jaybillington13@gmail.com
                <br>
                <b>Curriculum:</b> Crazy Love - Francis Chan
                </p>
            
            <!-- form id="infoForm2" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="billington">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>

        <div id="openBombard" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Michael and Kristine Bombard</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
            <div class="infoContent">
            <img class="infoImg" src="images/leaders/Bombard.jpg">
            <p><b>Meeting Time:</b> Thursdays at 7:00 PM
                <br><b>Location:</b> 683 C Street Pasadena, MD 21122
                <br>
                <b>Phone Number:</b> (719) 244-5734
                <br>
                <b>Email:</b> michael.bombard@gmail.com
                <br>
                <b>Curriculum:</b> Church Provided
                </p>
            
            <!-- form id="infoForm3" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="bombard">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>


<div id="openBrink" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Patrick Brink</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Brink.jpg">
            <p><b>Meeting Time:</b> Saturdays at 9:00 PM
                <br><b>Location:</b> Lighthouse Church, 10-13 Room
                <br>
                <b>Phone Number:</b> (443) 414-3456
                <br>
                <b>Email:</b> patbrink@gmail.com
                <br>
                <b>Curriculum:</b> Church Provided | Men Only
                </p>
            
            <!-- form id="infoForm4" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="brink">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>
        
        <div id="openCosta" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Joey Costa</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Costa.jpg">
            <p><b>Meeting Time:</b> Thursdays at 7:00 PM
                <br><b>Location:</b> LH Church, 4th and 5th Grade Classroom
                <br>
                <b>Phone Number:</b> (443) 388-7192
                <br>
                <b>Email:</b> pursuedbygod@gmail.com
                <br>
                <b>Curriculum:</b> Life’s Healing Choices by Saddleback Church
                </p>
            
            <!-- form id="infoForm5" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="costa">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>

        
        <div id="openCurtin" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Paul Curtin</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Curtin.jpg">
            <p><b>Meeting Time:</b> Wednesdays at 7:00 PM
                <br><b>Location:</b> 8198 Waterford Rd Pasadena, MD 21122
                <br>
                <b>Phone Number:</b> (410) 978-8467
                <br>
                <b>Email:</b> chesapeaketrader@yahoo.com
                <br>
                <b>Curriculum:</b> Church Provided
                </p>
            
            <!-- form id="infoForm6" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="curtin">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>

    <div id="openCorbin" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Dave and Jamie Corbin</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Corbin.jpg">
            <p><b>Meeting Time:</b> Tuesdays at 7:00 PM
                <br><b>Location:</b> 200 7th Ave Brooklyn Park, MD 21225
                <br>
                <b>Phone Number:</b> (443) 248-8812
                <br>
                <b>Email:</b> dmcorbin@gmail.com
                <br>
                <b>Curriculum:</b> Church Provided
                </p>
            
            <!-- form id="infoForm7" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="corbin">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>

    <div id="openDitzel" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Art Ditzel</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Ditzel.jpg">
            <p><b>Meeting Time:</b> Wednesdays at 7:00 PM
                <br><b>Location:</b> 1151 St. Catherine Drive Annapolis, MD 21409
                <br>
                <b>Phone Number:</b> (410) 212-0399
                <br>
                <b>Email:</b> artditzel74@gmail.com
                <br>
                <b>Curriculum:</b> Men's bible study: book of Daniel
                </p>
            
            <!-- form id="infoForm7" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="ditzel">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>


    <div id="openDitzel2" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Art Ditzel</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Ditzel.jpg">
            <p><b>Meeting Time:</b> Every Other Saturday at 7:00 PM
                <br><b>Location:</b> 1151 St. Catherine Drive Annapolis, MD 21409
                <br>
                <b>Phone Number:</b> (410) 212-0399
                <br>
                <b>Email:</b> artditzel74@gmail.com
                <br>
                <b>Curriculum:</b> Book of Hebrews
                </p>
            
            <!-- form id="infoForm7" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="ditzel">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>
        
        <div id="openFeeney" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Timothy and Donna Feeney</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Feeney.jpg">
            <p><b>Meeting Time:</b> Tuesdays at 7:00 PM
                <br><b>Location:</b> 269 Scotts Manor Drive Glen Burnie, MD 21061
                <br>
                <b>Phone Number:</b> (410) 510-8419
                <br>
                <b>Email:</b> tfeeney@rockbridge.org
                <br>
                <b>Curriculum:</b> Church Provided
                </p>
            
            <!-- form id="infoForm8" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="feeney">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>     
    
        </div>
        </div>
        </div>

     <div id="openFoster" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Paul and Vicki Foster</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Foster.jpg">
            <p><b>Meeting Time:</b> Tuesdays at 7:00 PM
                <br><b>Location:</b> LH Church, K-5 Large Group Room
                <br>
                <b>Phone Number:</b> (410) 987-2028
                <br>
                <b>Email:</b> paul@lighthousegb.com
                <br>
                <b>Curriculum:</b> Church Provided
                </p>
           
            <!-- form id="infoForm9" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="foster">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>
        
        
    <div id="openCSmith" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Carol Smith</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/CSmith.jpg">
            <p><b>Meeting Time:</b> Tuesdays at 7:00 PM
                <br><b>Location:</b> LH Church, 4th and 5th Grade Classroom
                <br>
                <b>Phone Number:</b> (443) 962-3901
                <br>
                <b>Email:</b> clanhamsmith5@gmail.com
                <br>
                <b>Curriculum:</b> Beth Moore’s Women’s Bible Study “The Patriarchs”
            </p>
          
            <!-- form id="infoForm10" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="csmith">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

    <div id="openKinstler" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Margarita Kinstler</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Kinstler.jpg">
            <p><b>Meeting Time:</b> Wednesdays 9:30 AM
                <br><b>Location:</b> LH Church, Youth Room
                <br>
                <b>Phone Number:</b> (410) 409-0682
                <br>
                <b>Email:</b> lmkinstler@gmail.com
                <br>
                <b>Curriculum:</b> Book Study: “A Woman’s Guide to Hearing God’s Voice: Finding Direction and Peace Through the Struggles of Life”
            </p>
          
            <!-- form id="infoForm11" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="kinstler2">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

        <div id="openHahn" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Preston and Sarah Hahn</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Hahn.jpg">
            <p><b>Meeting Time:</b> Wednesdays 7:00 PM
                <br><b>Location:</b> 551 Donaldson Street Severn, MD 21144
                <br>
                <b>Phone Number:</b> (443) 336-4248
                <br>
                <b>Email:</b> Prestn2Him@aol.com
                <br>
                <b>Curriculum:</b> Church Provided
            </p>
          
            <!-- form id="infoForm12" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="hahn">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>
        
        
    <div id="openRidgely" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Paul and Toni Ridgely</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Ridgely.jpg">
            <p><b>Meeting Time:</b> Thursdays at 7:00 PM
                <br><b>Location:</b> 7027 Cresthaven Drive, Glen Burnie, MD 21061
                <br>
                <b>Phone Number:</b> (443) 996-9300
                <br>
                <b>Email:</b> newlifegraph@netscape.net
                <br>
                <b>Curriculum:</b> Studying the Book of James
            </p>
            
            <!-- form id="infoForm14" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="ridgley">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

        <div id="openBrown" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Lisa Brown</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Brown.jpg">
            <p><b>Meeting Time:</b> Thrusdays at 7:00 PM
                <br><b>Location:</b> LH Church, Youth Room
                <br>
                <b>Phone Number:</b> (410) 218-3140
                <br>
                <b>Email:</b> LBrownie_83@yahoo.com
                <br>
                <b>Curriculum:</b> Church Provided
            </p>
            
            <!-- form id="infoForm15" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="brown">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

        <div id="openShaffer" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Fred and Pam Shaffer</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Shaffer.jpg">
            <p><b>Meeting Time:</b> Wednesdays at 7:00 PM
                <br><b>Location:</b> LH Church, 4th and 5th Grade Classroom
                <br>
                <b>Phone Number:</b> (443) 926-6457
                <br>
                <b>Email:</b> glaucousgull@verizon.net
                <br>
                <b>Curriculum:</b> Church Provided
            </p>
            
            <!-- form id="infoForm16" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="Shaffer">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

        <div id="openShibilsky" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Diana Shibilsky</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Shibilsky.jpg">
            <p><b>Meeting Time:</b> Mondays at 7:30 PM
                <br><b>Location:</b> LH Church, 4th and 5th Grade Classroom
                <br>
                <b>Phone Number:</b> (410) 787-1377
                <br>
                <b>Email:</b> dndshib@verizon.net
                <br>
                <b>Curriculum:</b> Beth Moore’s Women’s Bible Study: Children of the Day
            </p>
            
            <!-- form id="infoForm16" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="shibilsky">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

        <div id="openSilanskas" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Ron Silanskas</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Silanskas.jpg">
            <p><b>Meeting Time:</b> Mondays at 7:00 PM
                <br><b>Location:</b> LH Church, 3rd Grade Classroom
                <br>
                <b>Phone Number:</b> (410) 789-2136
                <br>
                <b>Email:</b> rs21227@aol.com
                <br>
                <b>Curriculum:</b> Dr. Jeremiah Series - The Agents of the Apocalypse
            </p>
            
            <!-- form id="infoForm17" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="silanskas">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

        <div id="openSilanskas2" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Ron Silanskas</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Silanskas.jpg">
            <p><b>Meeting Time:</b> Wednesdays at 6:45 PM
                <br><b>Location:</b> 306 Mary Lou Ave. Glen Burnie, MD 21060
                <br>
                <b>Phone Number:</b> (410) 789-2136
                <br>
                <b>Email:</b> rs21227@aol.com
                <br>
                <b>Curriculum:</b> Church Provided
            </p>
            
            <!-- form id="infoForm18" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="silanskas2">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

        <div id="openSylce" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Linda Sylce</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Sylce.jpg">
            <p><b>Meeting Time:</b> Wednesdays at 7:00 PM
                <br><b>Location:</b> 27 Harvard Rd. Glen Burnie, MD 21060
                <br>
                <b>Phone Number:</b> (410) 299-5964
                <br>
                <b>Email:</b> linda.sylce@westway.com
                <br>
                <b>Curriculum:</b> Church Provided; This group is for singles 30 and older.
            </p>
            
            <!-- form id="infoForm19" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="sylce">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>
        
    <div id="openSmith" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Victor and Pearl Smith</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Smith.jpg">
            <p><b>Meeting Time:</b> Thursdays at 7:00 PM
                <br><b>Location:</b> LH Church, Pre-K Classroom
                <br>
                <b>Phone Number:</b> (443) 962-0707
                <br>
                <b>Email:</b> vrsmith55@yahoo.com
                <br>
                <b>Curriculum:</b> Have a New Family by Friday by Dr. Kevin Leman
            </p>
           
            <!-- form id="infoForm20" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="smith">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>
        
        <div id="openSummers" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Steve and Lauren Summers</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Summers.jpg">
            <p><b>Meeting Time:</b> Thursdays at 7:00 PM
                <br><b>Location:</b> 8397 Armstrong Dr. Pasadena, MD 21122
                <br>
                <b>Phone Number:</b> (410) 971-6011
                <br>
                <b>Email:</b> sks7188@gmail.com 
                <br>
                <b>Curriculum:</b> Kingdom Man and Kingdom Woman by Dr. Tony Evans
            </p>
           
            <!-- form id="infoForm21" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="summers">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

        
    <div id="openThompson" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>David Thompson</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Thompson.jpg">
            <p><b>Meeting Time:</b> Wednesdays at 7:00 PM
                <br><b>Location:</b> LH Church, Youth Room
                <br>
                <b>Phone Number:</b> (443) 694-6958
                <br>
                <b>Email:</b> dathompmd@gmail.com
                <br>
                <b>Curriculum:</b> Church Provided
            </p>
           
            <!-- form id="infoForm22" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="thompson">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

        <div id="openWelch" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Jeff Welch</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Welch.jpg">
            <p><b>Meeting Time:</b> Mondays at 7:00 PM
                <br><b>Location:</b> LH Church, K-5 Large Group Room
                <br>
                <b>Phone Number:</b> (240) 205-1221
                <br>
                <b>Email:</b> juicecap@gmail.com
                <br>
                <b>Curriculum:</b> Love and Respect Marriage Series
            </p>
           
            <!-- form id="infoForm23" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="welch">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

        <div id="openWalters" class="infoWindow">
        <div>
         
        <div class="infoHeader">
            <h2>Tim Walters</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
         
        <div class="infoContent">
            <img class="infoImg" src="images/leaders/Walters.jpg">
            <p><b>Meeting Time:</b> Mondays at 7:00 PM
                <br><b>Location:</b> LH Church, Youth Room
                <br>
                <b>Phone Number:</b> (443) 848-6291
                <br>
                <b>Email:</b> eodtim@excite.com
                <br>
                <b>Curriculum:</b> Dave Ramsey’s Financial Peace University
            </p>
           
            <!-- form id="infoForm24" class="pure-form" action="http://www.lighthousegb.com/kiosk/groupmail.php" method="POST">
                <fieldset>
                <legend><br>Send me this group's info</legend>
                <input name="email" type="email" placeholder="Email">
                <input name="group" type="hidden" value="walters">
                <button type="submit" class="pure-button pure-button-primary">Send Group Info</button>
                </fieldset>
            </form --> <br><br><br><br><br>
    
        </div>
        </div>
        </div>

		
		<!-- END WRAPPER -->
		
		</section>
		
		
</body></html>

