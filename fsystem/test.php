 <?php 
 
 use PHPUnit\Framework\TestCase;
require_once(M_User.php);
class testMetad extends TestCase{
 
 
 
 
 
 
 
 public function testaction_reg(){
		
		$users = new M_Users();
		$this->assertEquals($users->action_reg);
		
		

    

}}

	?>