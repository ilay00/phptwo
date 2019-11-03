<?php
 //
class M_zacaz
{
 
    function Ofr()
    {
      include('v/v_ofor_zacaz.php');
    //  include('M_Product.php');
       include('m/bd.php');
      
   
      
      $log=$_POST['givenname'];
      $telephone=$_POST['telephone'];
      $col=$_POST['col'];
      // $by=$_POST['by'];
      
         $rt=$db->exec("INSERT INTO `zacaz` (`id`,`name`,`tel`,`col`) VALUES ('1', '1', '1','1')");
  
                 
  }
      
            
    }
           

   


?>


