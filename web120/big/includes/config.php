<?php
// congig.php

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//enables page to know it's own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//reCAPTCHA credentials here


$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
    case 'index.php': 
        $title = 'Home | BIG | Aisling Cooke | WEB120';
    break;

    case 'flexbox.php': 
        $title = 'Flexbox | BIG | Aisling Cooke | WEB120';
    break;

    case 'galleries.php': 
        $title = 'Galleries | BIG | Aisling Cooke | WEB120';
    break;

    case 'google.php': 
        $title = 'Google | BIG | Aisling Cooke | WEB120';
    break;

    case 'calendar.php': 
        $title = 'Calendar | BIG | Aisling Cooke | WEB120';
    break;
        
    case 'map.php': 
    $title = 'Map | BIG | Aisling Cooke | WEB120';
    break;

    case 'youtube.php': 
    $title = 'Youtube | BIG | Aisling Cooke | WEB120';
    break;

    case 'shoppingcarts.php': 
    $title = 'Shopping Carts | BIG | Aisling Cooke | WEB120';
    break;

    case 'siteapp.php': 
    $title = 'Site vs App | BIG | Aisling Cooke | WEB120';
    break;

    case 'webcam.php': 
    $title = 'Webcam | BIG | Aisling Cooke | WEB120';
    break;
    
    case 'google.php': 
    $title = 'Google | BIG | Aisling Cooke | WEB120';
    break;
    
    case 'parallax.php': 
    $title = 'Parallax | BIG | Aisling Cooke | WEB120';
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
