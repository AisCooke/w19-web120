<?php
date_default_timezone_set('America/Los_Angeles');
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
$siteKey = "6Ldm9pQUAAAAAI92Mo89u3XUG92ICA-AN5gopYqa";
$secretKey = "6Ldm9pQUAAAAADGmuMTUAoCidLxQ3rRDwz_dEdsl";
switch(THIS_PAGE){
    case 'index.php': 
        $title = 'Welcome to Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Welcome to Dave\'s Meat & Produce!';
    break;
    case 'meat.php': 
        $title = 'Our Meat | Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Our Meat';
    break;
    case 'produce.php': 
        $title = 'Our Produce|Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Our Produce';
    break;
    case 'about.php': 
        $title = 'About Us | Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'About Us';
    break;
    case 'contact.php': 
        $title = 'Contact Us | Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Contact Us';
    break;
    case 'privacy.php': 
        $title = 'Privacy | Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Privacy';
    break;
    case 'fruit.php': 
        $title = 'Fruit | Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Fruit';
    break;    
    case 'vegetables.php': 
        $title = 'Vegetables | Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Vegetables';
    break;
    case 'beef.php': 
        $title = 'Beef | Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Beef';
    break;   
    case 'pork.php': 
        $title = 'Pork | Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Pork';
    break; 
    case 'sausage.php': 
        $title = 'Sausage | Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Sausage';
    break;
    case 'lamb.php': 
        $title = 'Lamb | Dave\'s Meat & Produce | Tacoma, WA';
        $pageid = 'Lamb';
    break;    
    case 'poultry.php': 
        $title = 'Poultry | Dave\'s Meat & Produce | Tacoma';
        $pageid = 'Poultry';
    break;
    case 'fish.php': 
        $title = 'Fish | Dave\'s Meat & Produce | Tacoma';
        $pageid = 'Fish';
    break;   
    case 'pork.php': 
        $title = 'Pork | Dave\'s Meat & Produce';
        $pageid = 'Pork';
    break;         
    default:    
        $title = THIS_PAGE;
        $pageid = THIS_PAGE;
}
$meta_description = "Grocery shopping shouldn't be a chore and at Dave's Meats and Produce in Tacoma it isn't. Stop by the store today and have fun picking out new eats!";
$meta_keywords = "butcher near me, butcher tacoma, tacoma butcher, butcher shop, butcher tacoma wa, butcher and grocer, grocery store, groceries";
?>