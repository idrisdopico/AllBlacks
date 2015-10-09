<?php
//   waar ik was gebleven
// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

require 'libs/functions.php';

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'All Blacks');
// Toon de template: output html
$templateParser->display('head.tpl');

$templateParser->display('header.tpl');

$action = isset($_GET['action']) ? $_GET['action'] : '';
$page = isset($_GET['page']) ? $_GET['page'] : '';


switch ($page) {
	case 'home':
	$page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
	$templateParser->display('views/news.tpl');
	require 'models/select_newsarticles.php';
	$templateParser->assign('result', $result);
	$templateParser->display('views/newsarticles.tpl');
	break;

	case 'competitionSchedule':
	require 'models/select_matches.php';
	$templateParser->assign('result', $result);
	$templateParser->display('views/competitionSchedule.tpl');
	break;

	case 'players':
	$templateParser->display('views/players.tpl');
	break;

	require 'models/select_newsarticles.php';
	$templateParser->assign('result', $result);
	$templateParser->display('views/newsarticles.tpl');
	break;

	case 'theHaka':
	include 'views/theHaka.tpl' ;
	break;

	case 'contact':
	$templateParser->assign('title',"hallo");
	$templateParser->display('views/contact.tpl');
	break;

	case 'about':
	$templateParser->display('views/about.tpl');
	break;

	case 'search':
	$search_input = isset($_POST['search']) ? $_POST['search'] : '';
	require_once 'models/search_news.php';
	$templateParser->assign('result', $result);
	$templateParser->display('views/search.tpl');
	break;
	
	default:
	require 'models/select_newsarticles.php';
	$templateParser->assign('result', $result);
	$templateParser->display('views/newsarticles.tpl');
	
}



// footer
$templateParser->display('views/footer.tpl');
