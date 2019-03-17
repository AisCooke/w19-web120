<?php
// congig.php

//place URL & labels in the array here for navigation:
    $nav1['meat.php'] = "Meat";
    $nav1['produce.php'] = "Produce";
    $nav2['about.php'] = "About";
    $nav2['contact.php'] = "Contact";

    
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//enables page to know it's own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//reCAPTCHA credentials here
//Here are the keys for the server: swordfern.dreamhosters.com
$siteKey = "6Ldm9pQUAAAAAI92Mo89u3XUG92ICA-AN5gopYqa";
$secretKey = "6Ldm9pQUAAAAADGmuMTUAoCidLxQ3rRDwz_dEdsl";



switch(THIS_PAGE){
    case 'index.php': 
        $title = 'Welcome to Dave\'s Meat';
        $pageid = 'Welcome!';
    break;

    case 'meat.php': 
        $title = 'Dave\'s Meat | Our Meat';
        $pageid = 'Our Meat';
    break;

    case 'produce.php': 
        $title = 'Dave\'s Meat | Our Produce';
        $pageid = 'Our Produce';
    break;

    case 'about.php': 
        $title = 'Dave\'s Meat | About Us';
        $pageid = 'About Us';
    break;

    case 'contact.php': 
        $title = 'Dave\'s Meat | Contact Us';
        $pageid = 'Contact Us';
    break;

    case 'template.php': 
    $title = 'Dave\'s Meat | Template';
    $pageid = 'Template';
    break;
        
    default:    
    $title = THIS_PAGE;
    $pageid = THIS_PAGE;
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