<?php
//
// ����������� �������� ������.
//
include_once('m/M_User.php');

class C_Catalog extends C_Base
{
	//
	// �����������.
	//

	public function action_catalg(){
		$this->title .= '::Каталог';
		$users = new M_Users();
		$users->registr();
		//$this->isPost();
		//$user->auth($login,$pass);
		$this->content = $this->Template('v/v.catalag.php');
		/*$user = new M_User();
		if($user->auth($login,$pass))
	*/	
	}
	
	
}
