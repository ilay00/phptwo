 <?php 

 use PHPUnit\Framework\TestCase;
 require_once(m/M_User.php);
 
 
 
class testMetad extends TestCase{
 
 
 
 public function action_reg(){
		
		$users = new M_Users();
		$users->registr();
		
	}
    }
}
	?>