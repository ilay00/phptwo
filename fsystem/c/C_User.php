<?php
//
// ����������� �������� ������.
//
include_once('m/M_User.php');

class C_User extends C_Base
{
	//
	// �����������.
	//

	public function action_reg(){
		$this->title .= '::Регистрация';
		$users = new M_Users();
		$users->registr();
		//$this->isPost();
		//$user->auth($login,$pass);
		$this->content = $this->Template('v/v_user.php');
		/*$user = new M_User();
		if($user->auth($login,$pass))
	*/	
	}
	
	/*public function action_auth(){
		$this->title .= '::������';
		$text = text_get();
		$this->content = $this->Template('v/v_index.php', array('text' => $text));	
		/*$user = new M_User();
		if($user->auth($login,$pass))
			
	}*/
	
	/*public function action_edit(){
		$this->title .= '::��������������';
		
		if($this->isPost())
		{
			text_set($_POST['text']);
			header('location: index.php');
			exit();
		}
		
		$text = text_get();
		$this->content = $this->Template('v/v_edit.php', array('text' => $text));		
	}*/
}
