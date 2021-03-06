/<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<meta name="description" content="Blue Developer Directory">
	
<!--	<link rel = "stylesheet" href = "styles/w3.css" type = "text/css">  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/home.css">
	<link rel="stylesheet" href="styles/contact.css">
	
<title>Blue Developer Directory</title>
</head>

<body>
	<div class="container-fluid">

<!--HEADER -->
		<div class="row">
    		<div class="col">
      			<h1><span class="blue-text">Blue</span> Developer Directory</h1>
    		</div>
			<div class="col">
      			<h4>Find A Developer <span class="now">NOW</span></h4>
    		</div>
  		</div>

<!--NAVBAR--> 
 <nav class="nav">
 	<ul>
		<li class="menuitem"> <a class="nav-link" href="index.html">Home</a> </li>
		<li class="menuitem"></li><a class="nav-link" href="aboutus.html">About Us</a>
		<li class="menuitem"></li><a class="nav-link" href="browsedev.html">Browse Developers</a>
		<li class="menuitem"></li><a class="nav-link" href="registerasdev.html">Register as Developers</a>
		<li class="menuitem"></li><a class="nav-link" href="contactus.html">Contact Us</a>
	</ul>
</nav>

<!--LINKS-->
	<aside>
		<nav id="links">
			<h3>Links</h3>
			<ul class="leftLinks">
				<li class="nav-item">
    				<a href="#">SEO</a> </li>
				<li class="nav-item">
    				<a href="#">PHP</a> </li>
    			<li class="nav-item">
    				<a href="#">AJAX</a> </li>
    			<li class="nav-item">
    				<a href="#">jQuery</a> </li>
    			<li class="nav-item">
    				<a href="#">Web Design</a> </li>
				<li class="nav-item">
    				<a href="#">Web Developer</a> </li>
    			<li class="nav-item">
    				<a href="#">Content Creation</a> </li>
    			<li class="nav-item">
    				<a href="#">Internet Marketing</a> </li>
    			<li class="nav-item">
    				<a href="#">XHTML Templates</a> </li>
			</ul>
		</nav>
	</aside>

<!--CONTACT FORM-->
	<section class="contactsec">
		<h4>Contact Us</h4>
		<p>Pleae use this form to contact a member of our website team.</p>
<!--		
		<form class="contactform">
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputname">Full Name:</label>
			      <input type="text" class="form-control" id="inputname" placeholder="John Doe/Joe Doe">
		    	</div>

		    	<div class="form-group col-md-6">
					<label for="inputEmail4">Email Address:</label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="example@mail.com">
				</div>
			</div>

			<div class="form-group">
		    	<label for="inputphone">Phone:</label>
		    	<input type="number" class="form-control" id="inputnumber" placeholder="0123456789">
		    </div>

		    <div class="row">
		    	<legend class="col-form-label col-sm-2 pt-0">Best Time to Call</legend>
		    	<div class="col-sm-10">
		    		<div class="form-check">
		    			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="morning" checked>
		    			<label class="form-check-label" for="gridRadios1">Morning</label>
		    		
		    			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="afternoon">
		    			<label class="form-check-label" for="gridRadios2">Afternoon</label>
		    		
		    			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="evening">
		    			<label class="form-check-label" for="gridRadios3">Evening</label>
		    		</div>
		    	</div>
		    </div>

		    <div class="form-group">
		    	<label for="inputAddress1">Full Address</label>
		    	<input type="text" class="form-control" id="inputAddress1" placeholder="Apartment, floor, City, State, Zip">
		    </div>

		    <button type="submit" class="btn btn-primary">Submit</button>
-->

			<div class="form-group">
				<label for="formControlRange">Project Budget</label>
				<input type="range" class="form-control-range" name="budgetrange" min="0" max="10000" onchange="updateRangeInput(this.value)">
				<input type="text" class="form-control" id="inputrange" placeholder="5000">
			</div>
			<p id="service">Service Needed (Check all that you need)</p>

			<div class="form-check-inline">
				<input class="form-check-input" type="checkbox" value="html" id="check1">
				<label class="form-check-label" for="check1">HTML5</label>
			</div>
			<div class="form-check-inline">
				<input class="form-check-input" type="checkbox" value="CSS3" id="check2">
				<label class="form-check-label" for="check2">CSS3
				</label>
			</div>
			<div class="form-check-inline">
				<input class="form-check-input" type="checkbox" value="bootstrap" id="check3">
				<label class="form-check-label" for="check3">Bootstrap</label>
			</div>
			<div class="form-check-inline">
				<input class="form-check-input" type="checkbox" value="javascript" id="check4">
				<label class="form-check-label" for="check4">Javascript
				</label>
			</div>
			<div class="form-check-inline">
				<input class="form-check-input" type="checkbox" value="wordpress" id="check5">
				<label class="form-check-label" for="check5">Wordpress</label>
			</div>
			<div class="form-check-inline">
				<input class="form-check-input" type="checkbox" value="webdesign" id="check2">
				<label class="form-check-label" for="check6">Web Design
				</label>
			</div> 

		   <div class="form-row" id="form-row">
		    	<div class="form-group col-md-6">
		      		<label for="inputWebsite">GitHub Profile Link</label>
		      		<input type="url" class="form-control" id="inputWebsite">
		    	</div>

		   	<div class="form-group col-md-4">
		      	<label for="inputPages">Number of Pages</label>
		      	<select id="inputPages" class="form-control">
		        		<option selected>1</option>
		        		<option>2</option>
		        		<option>3</option>
		        		<option>4</option>
		        		<option>5</option>
		      	</select>
		    	</div>
		   </div>

		    	<div class="form-row">
			   	<div class="form-group col-md-6">
			      	<label for="inputDate">Start Date</label>
			      	<input type="date" class="form-control" id="inputDate">
		   	 	</div>

		    		<div class="form-group col-md-6">
			      	<label for="inputColor">Basic Color of the Site</label>
			      	<input type="color" class="form-control" id="inputColor">
		    		</div>
			   </div>

		    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
		 
		</form>

		<script type="text/javascript" src="scripts/contactpage.js"> </script>

	</body>
</html>



<?php

?>