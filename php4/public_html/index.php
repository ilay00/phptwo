<?php
// подгружаем и активируем авто-загрузчик Twig-а
require_once ('../lib/Twig/Autoloader.php');
Twig_Autoloader::register();

try {
  // указывае где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('templates');
  
  // инициализируем Twig
  $twig = new Twig_Environment($loader);
  
  // подгружаем шаблон
  $template = $twig->loadTemplate('t.tmpl');
  
  // передаём в шаблон переменные и значения
  // выводим сформированное содержание
  echo $template->render(array(
    'myScan' => myScan("img")
    
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>



<?php



//echo 1;
//include_once "./dir/test1.php";


function myScan ($dir) {

	$list = scandir($dir);
if(!$list) {
	return false;
}

unset($list[0], $list[1]);
	

		//include $dir.DIRECTORY_SEPARATOR.$file;
	
       
        foreach ($list as $file) {
            echo'<a href=imgbig/'.$file.'><img class="img" src= img/'.$file.'></a>';
        }

}



//echo mime_content_type('./config/Const.php').PHP_EOL;
//include  IMG_ROOT.'iso-republic-woman-looks-out-train-window-450x300.jpg';
 
$a=date('Y год');

$navig= [
'minu'=>'<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>',
'<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"></a>',
'<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>',
'<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>'];
?>
