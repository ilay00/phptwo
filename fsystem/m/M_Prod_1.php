
<?php 
  



 abstract class M_Prodone {
     
    
   abstract function Product_one();
          
  

    }
     class M_pr_1 extends  M_Prodone{
      
        public function Product_one(){
          
          include('m/bd.php');
         
      
          $log=$_POST['givenname'];
            
          if($log==NULL){
           echo "Ведите";
            }else{ echo $log;}

            $col=$_POST['col'];
                      // $by=$_POST['by'];
                   if($col==NULL)
                   {
                           echo "Нету";
                   }else
                   {
                           echo "ecть";
                   }
                   $result = $db->query("SELECT prod.id_header,header.header,img,opis ,footer FROM prod
                   inner JOIN  header
                  ON(prod.id_header=header.id)  WHERE prod.id=1");
                  while ($row = $result->fetch()) {
                      // в результате получаем ассоциативный массив
                                $header=$row[1];
                                 $footer=$row[4];
                           $AR[]="$row[0] $row[1] $row[2] $row[3] $row[4] ";
                  }


                  $telephone=$_POST['telephone'];
                   if($telephone==NULL)
                   {
                       echo "ведите";
                   }
                         else{ 
$db->exec("INSERT INTO `phpshop`.`user_name`(`id`,`name`,`tel`,`header`,`col`)VALUES(NULL,'$log','$telephone','$header','$col')");
                    // $this->connection = null;
                    $a[]="<a href=index.php?c=auth&act=authuser>Личный кобинет</a>";
          
                   }      
                 
                   return $AR[0].$a[0];

                 }
                    
                    }
      
    
        
      
                  class M_pr_2 extends M_Prodone{

                        public function Product_one()
                        {
                          
                          include('m/bd.php');


                         
                                   $log=$_POST['givenname'];
            
                                   if($log==NULL){
                                    echo "Ведите";
                                     }else{ echo $log;}

                                     $col=$_POST['col'];
                                               // $by=$_POST['by'];
                                            if($col==NULL)
                                            {
                                                    echo "Нету";
                                            }else
                                            {
                                                    echo "ecть";
                                            }
                                            $result = $db->query("SELECT prod.id_header,header.header,img,opis ,footer FROM prod
                                            inner JOIN  header
                                           ON(prod.id_header=header.id)  WHERE prod.id=2");
                                           while ($row = $result->fetch()) {
                                               // в результате получаем ассоциативный массив
                                                         $header=$row[1];
                                                          $footer=$row[4];
                                                    $AR[]="$row[0] $row[1] $row[2] $row[3] $row[4] ";
                                           }

  
                                           $telephone=$_POST['telephone'];
                                            if($telephone==NULL)
                                            {
                                                echo "ведите";
                                            }
                                                  else{ 
 $db->exec("INSERT INTO `phpshop`.`user_name`(`id`,`name`,`tel`,`header`,`col`)VALUES(NULL,'$log','$telephone','$header','$col')");
                                             // $this->connection = null;
                                             $a[]="<a href=index.php?c=auth&act=authuser>Личный кобинет</a>";
                                   
                                            }      
                                          
                                            return $AR[0].$a[0];

                                          }
                        


                          }
                        
                        


                      
                      
?>

