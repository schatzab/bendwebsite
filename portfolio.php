<!DOCTYPE html>
<html lang="en" ng-app>
<head>
<meta charset="UTF-8">
<meta name="description" content="about ct" />
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- media queries -->
<link rel="shortcut icon" href="/images/favicon.ico">
<title>Chelsea Town - Portfolio</title>
</head>
 <!--css-->
<link rel="stylesheet" type="text/css" href="css/chelseatown.css">
<link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'> <!-- body -->
<link href='https://fonts.googleapis.com/css?family=Kreon:700' rel='stylesheet' type='text/css'>
<!-- header -->
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<!--endcss-->

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="https://www.google.com/jsapi" type="text/javascript"></script>
<script language="Javascript" type="text/javascript">
   //<!
    google.load('search', '1'); /* Loads the Google Search API*/
  	google.load("jquery", "1.4.2");
  	google.load("jqueryui", "1.7.2");

    function OnLoad() {
      // Create a search control
      var searchControl = new google.search.SearchControl();

      // Add in a full set of searchers
      var localSearch = new google.search.LocalSearch();
      searchControl.addSearcher(localSearch);
/*      searchControl.addSearcher(new google.search.WebSearch());*/

      // Set the Local Search center point
      localSearch.setCenterPoint("Bend, OR");

      // tell the searcher to draw itself and tell it where to attach
      searchControl.draw(document.getElementById("searchcontrol"));

      // execute an inital search
      searchControl.execute("Remote Locations");
    }
    google.setOnLoadCallback(OnLoad);

    //]]>
    </script>

<body>
<center>

<header>
<!-- nav -->
<nav class="top_bar">
  <div style="float: left;">
    <div class="head_text_sp"><a href="/" style="color: #93c2d3;">Chelsea Town</a></div>
  </div>

  <div class="top_bar_inner">
    <a href="/#work" class="nav_jump">Work</a>
    <a href="/portfolio.php" class="nav_jump">Portfolio</a>
    <a href="/#skills" class="nav_jump">Skills</a>
    <a href="/#ref" class="nav_jump">Reference</a>
    <a href="/#about" class="nav_jump">About</a>
    <a href="/#contact" class="nav_jump">Contact</a>
  </div>
</nav>
</header>

<!-- Main Content -->
<div class="container_outer_sp">
  <div class="container_inner">








  </div>
</div>

<!-- footer -->		
<?php include("inc/footer.inc.php"); ?>

<!--js-->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/returntotop.js" type="text/javascript"></script>
<script src="js/navscroll.js" type="text/javascript"></script>
<script src="js/overlay.js" type="text/javascript"></script>
<script src="js/showskills.js" type="text/javascript"></script>

<!-- up arrow -->
<link href='https://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet' type='text/css'>
<!-- quote --> 
<link href='https://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>