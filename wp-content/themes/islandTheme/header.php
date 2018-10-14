<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage islandTheme
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="headContainer">
<div> 
    <div class="row">
    <!-- <div  class="col-md-1"></div> -->
     <div  class="col-md-12">
        <nav>
        <h4 id="leftHeader"><?php bloginfo('description');?></h4>
            <h1 class="navHead"><a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a></h1>
            <span id="menuGlyph" class="glyphicon glyphicon-align-justify dropdown-toggle" data-toggle="dropdown"></span>
            <div class="dropdown-menu">
            <ul>   
        <?php wp_nav_menu(); ?> 
        </ul>
    
  </div>
            <div class="preScroll">
            <ul class=" nav-tabs">   
        <?php wp_nav_menu(); ?> 
        </ul>
        </div>
            </nav>
        </div>  
        <!-- <div  class="col-md-1"></div> -->
        <!-- <div id="leftHeader" class="col-md-6">
            
        </div> -->
   </div>
   
</div>

    </header>

    

	
