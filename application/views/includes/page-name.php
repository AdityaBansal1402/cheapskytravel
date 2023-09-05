<?php
//index.php
//perform logic and set variables before any html

$page = isset($_GET['menu'])?$_GET['menu']:'home';

switch($page){
    case 'home':
        $pageTitle = 'Online cheap flights ticket booking | Flight tickets';
        $content = 'views/index.php';
        break;
    case 'about':
        $title = 'about us';
        $content = 'views/about.php';
        break;
    case 'contact':
        $title = 'get in touch';
        $content = 'views/contact.php';
        break;

        
        
        
}
//the following html could be in a separate file and included, eg layout.php
?>