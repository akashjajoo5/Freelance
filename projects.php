<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Post Your Project </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/projects.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome_1.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
   
</head><!--/head-->

<body>
    <?php
        include('header.php');
    ?><!--/#header-->
<!-- Meta tag Keywords --
<!--header-->
	<div class="header-w3l">
		
	</div><br><br>
<!--//header-->
<!--main-->
<div class="main-agileits"><br><br>
	<h3 class="sub-head">Post Your Project (Its's free )</h3>
</div>
    <div class="main-sub"><br>
		<div class="sub-main">	
			<form action="psubmit.php" method="post">
                <h3 class= "options">Select a Project Category</h3>

                <select id=sel_style  name="pcat" placeholder="Select  Project Category" required>
                    <option value="" disabled selected>Select a Project Category</option>
                    <option value="Websites ,IT & Software">Websites ,IT & Software</option>
                    <option value="Writing & Content">Writing & Content</option>
                    <option value="Design and Architecure">Design and Architecure</option>
                    <option value="Data Entry & Admin">Data Entry & Admin</option>
                    <option value="Control and Marketing">Control and Marketing</option>
  
                </select>  <br>
                <h3 class= "options">Project Name:</h3>
                <input placeholder="Project Name" name="Proj-Name" class="proj-name" type="text" required=""><br>
                <h3 class= "options">Project Details:</h3>
                <textarea id=describe cols="50" rows="3" maxlength="200" name="Description" placeholder="Describe your project"></textarea>
                 <h3 class= "options">What budget do you have in mind?</h3>
                 <select id=sel_style  name="budget" required>
                    <option value="" disabled selected>Budget</option>
                    <option value="1000-2500">1000-2500</option>
                    <option value="2500-5000">2500-5000</option>
                    <option value="7500-10000">7500-10000</option>
                    <option value="10000-12500">10000-12500</option>
                    <option value="12500-25000">12500-25000</option>
  
                </select>  <br>

                <input type="submit" value="Post Project"> <br>
                

               </form>
		

            

		</div>
		<div class="clear"></div>
    </div>
<!--//main-->

</body>
</html>
