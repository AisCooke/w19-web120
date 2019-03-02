<?php
// congig.php

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Aisling";
    
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//enables page to know it's own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//reCAPTCHA credentials here

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
    case 'index.php': 
        $title = 'Welcome | Aisling Cooke | WEB120';
        $logo = "fa-home";
    break;

    case 'big/index.php': 
        $title = 'Big | Aisling Cooke | WEB120';
    break;

    case 'aia.php': 
        $title = 'AIA | Aisling Cooke | WEB120';
        $logo = "fa-universal-access";
        $logo_color = ' style="color:blue"';
    break;

    case 'flowchart.php': 
        $title = 'Flowchart | Aisling Cooke | WEB120';
    break;

    case 'fp/index.php': 
        $title = 'Final Project | Aisling Cooke | WEB120';
    break;

    case 'contactme.php': 
        $title = 'Contact | Aisling Cooke | WEB120';
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:green"';
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default    
}

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

//no index while building a client site in our space
$robots = "noindex,nofollow";
$meta_description = "Web developer seeking employment in Seattle.  Focus on JavaScript, CSS & HTML.";
$meta_keywords = "graphic design, website design, website builder, logo design, create a website, web design, web designer, web development, web developer, seattle designer, seattle web designer, seattle web developer, student web designer, student web developer, web design portfolio, javascript, css, html,";


switch(THIS_PAGE){
   
    case 'index.php':
        $title = 'Welcome | Aisling Cooke | WEB120';
    break;
        
    case 'contactme.php':
        $title = 'Contact | Aisling Cooke | WEB120';
        $robots = "noindex,follow";
        $meta_description = "Please contact Aisling. I'm a " . $meta_description;
        $meta_keywords = "contact me, contact a web designer, contact page, find out more, " . $meta_keywords;
    break;    
        
}





?>