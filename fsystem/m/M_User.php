<?php
  
   abstract  class M_Users  {
  
    abstract function acauser();
    
   }
   
    class acaunt extends M_Users
    {
      
     public function acauser(){
     //  include('m/M_User.php');
        include('m/bd.php');
        //$telephone=$_POST['telephone'];
       //   $telephone=(string)"+12345566789";
      //if($produkt==NULL)
      //{
        //echo "ведите";
      //}
      //else{
        
       $showall = $db->query("SELECT * FROM `user_name`");
       
       while ($row = $showall->fetchAll()) {
         // в результате получаем ассоциативный массив
             // $ary= array_values($row);
             $all=$row;
             $nams=$row[1][1];
             $tels=$row[1][2];
             $headers=$row[1][3];
             $cols=$row[1][4];
         // $row[1];
       
        }
        // var_dump($row);
         $db->exec("CREATE TABLE `phpshop`.`uses` (
          id INT NOT NULL AUTO_INCREMENT ,
          name VARCHAR ( 32 ),
          tel VARCHAR ( 50 ),
          header VARCHAR ( 256 ),
          col VARCHAR ( 256 ),
          PRIMARY KEY ( id )) CHARACTER SET utf8;");


$db->exec("INSERT INTO `phpshop`.`uses`(`id`,`name`,`tel`,`header`,`col`)VALUES(NULL,'$nams',' $tels','$headers','$cols')");


     $showall = $db->query("SELECT * FROM `uses`");
     while ($row = $showall->fetchAll()) {
         // в результате получаем ассоциативный массив
             
        
           
                      $row[1];
       
        }


         /*CREATE TABLE uses (
id INT NOT NULL AUTO_INCREMENT ,
name VARCHAR ( 32 ),
tel VARCHAR ( 50 ),
header VARCHAR ( 256 ),
col VARCHAR ( 256 ),

PRIMARY KEY ( id )) CHARACTER SET utf8;
*/
       // $flipped = array_flip($row);  
        //$key = array_search('laic', $flipped);
             
         

         //var_dump($ary);
         //$flipped = array_flip($ary);   
         //var_dump($flipped);
     
       //  var_dump($key);
      

           /*  $flipped = array_flip($ary);   
              var_dump($flipped);
              $key = array_search($telephone,$flipped);
                  var_dump($key);
              var_dump($row);*/
              return $row[1].$nams.$tels.$headers.$cols;
        // $flipped = array_flip($ary);   
      // var_dump($flipped[0]);
      
      //var_dump($telephone);
           //$key = array_search($telephone,$flipped);
        
                // var_dump($key);
      
                        

                        // return  $key[0];            
    }

}
                

      
           
              
     
  
  

?>
    
    
