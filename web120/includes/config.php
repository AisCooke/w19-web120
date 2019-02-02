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
        $title = 'Welcome';
        $logo = "fa-home";
    break;

    case 'big/index.php': 
        $title = 'Big';
    break;

    case 'aia.php': 
        $title = 'AIA';
        $logo = "fa-universal-access";
        $logo_color = ' style="color:blue"';
    break;

    case 'flowchart.php': 
        $title = 'Flowchart';
    break;

    case 'fp/index.php': 
        $title = 'Final Project';
    break;

    case 'contactme.php': 
        $title = 'Contact Aisling';
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






?>