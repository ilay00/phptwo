<?php
//
// ����������� �������� ������.
//
include_once('m/model.php');
include_once('m/M_Catalog.php');
include_once('m/M_Prod_1.php');
include_once('m/M_User.php');
//include_once('m/M_zacaz.php');

class C_Page extends C_Base
{
	//
	// �����������.
	//

    /**
     *
     */
    public function action_index(){
		$this->title .= '::';
		
        $goods = new M_Catalog();
        $goods->Catalog();
		$this->content = $this->Template('v/v_index.php',array('goods'=>$goods));
       
		//$text = text_get();
		//$today = date();
		
	}
	public function action_Product(){
		$this->title .= '::Описания товара';
       $produkt = new M_pr_1();
	   $produkt->Product_one();
		$this->content = $this->Template('v/v_forma_z.php',array('produkt'=>$produkt));
	}

	    public function action_Product1(){
		$this->title .= '::Описания товара';
       $produkt = new M_pr_2();
	   $produkt->Product_one();
		$this->content = $this->Template('v/v_forma_z.php',array('produkt'=>$produkt));
	}


	public function action_authuser(){
		$this->title .= '::Вашы покупки';
		$auths = new acaunt();
		$auths->acauser();
		$this->content = $this->Template('v/v_userAutsh.php',array('auths'=>$auths));	
		
			
	}
	/*public function action_zacaz()
	{
		$this->title .= '::';
		$ofer= new M_zacaz();
	    $ofer->Ofr();
		$this->content = $this->Template('v/v_ofor_zacaz.php',array('ofer'=>$ofer));
	}*/

    public function action_edit(){
		$this->title .= '::��������������';
		
		if($this->isPost())
		{
			text_set($_POST['text']);
			header('location: index.php');
			exit();
		}
		
		$text = text_get();
		$this->content = $this->Template('v/v_edit.php', array('text' => $text));		
	}
}
?>