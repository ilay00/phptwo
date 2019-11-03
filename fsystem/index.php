
<?php

function __autoload($classname){
	include_once("c/$classname.php");
}


//site.ru/index.php?act=auth&c=User

  $action = 'action_';
   $action .= (isset($_GET['act'])) ? $_GET['act'] :'index';

switch ($_GET['c'])
{
	case 'articles':
		$controller = new C_Page();
	case 'Product':
	  $controller = new C_Page();
		case 'user':
		$controller = new C_Page();
		case 'authuser':
		//$controller = new C_User();
		//case 'auth':
		$controller = new C_User();
		break;
	default:
		$controller = new C_Page();
}

$controller->Request($action);
