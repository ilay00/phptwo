<?php

class M_Catalog {
	
    function Catalog()
    {
		include('m/bd.php');


		$result = $db->query("SELECT*FROM `goods`");
		while ($row = $result->fetchAll()) {
			//в результате получаем ассоциативный массив
			   
				   return $row;}
		
	}
}



        /*вставляем несколько строк в таблицу
      
		
        /* $result=$db->prepare("SELECT*FROM `goods`");
		 $result->execute();
		 $results= $result->fetchAll(POD::FETCH_ACCOC);
		  print_r($results);*/
	 /* $sql="SELECT * FROM goods inner JOIN header
	   ON(header.id_header=goods.id_header)";
	  // ON(header.id_header=goods.id_header)
	   foreach($db->query($sql) as $row){
				return $row[0].$row[1].$row[2].$row[3].$row[4];
				
	}*/

	  /* $result = $db->query("SELECT  goods.id_header,header.header,img ,footer FROM goods  
	   inner JOIN  header ON(goods.id_header=header.id_header)");
	    while ($row = $result->fetch()) {
            // в результате получаем ассоциативный массив
              
			        return row[0]. $row[1]. $row[2].$row[3] ;
		};*/
		//return $result[1]; 
	                   
					   // goods.id_header,header.header,img ,footer
		   
				 
				/* $result = $db->query(" ORDER BY `id` DESC");
		   
			   while ($row = $result->fetch()) {
						в результате получаем ассоциативный массив
						   
							   return $row;
							   
							 } ;*/
							 



		
		   ?> 