<?
 
class M_Users {
      
   
     function registr()
    {
        include('m/bd.php');
        $log=$_POST['login'];
       $pass=$_POST['password'];
     if($log==NULL){
      echo "Ведите";
       }else{
       // вставляем несколько строк в таблицу 
	  $db->exec("INSERT INTO `testing` (`id`, `login`, `password`) VALUES (NULL, '$log', ' $pass')");

	// в случае ошибки SQL выражения выведем сообщене об ошибке
 
	$error_array = $db->errorInfo();
 
	if($db->errorCode() != 0000)
 
	echo "SQL ошибка: " . $error_array[2] . '<br />';

    }}
	
}