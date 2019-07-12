<?php 
	include "Models/Frontend/registrationModel.php";
	class registrationController extends baseController{
	//ke thua class productModel
	use registrationModel;
	//ham chi tiet tin tuc
	public function index(){
		$this->setView("Views/Frontend/registration.php");
		$this->setLayout("Views/Frontend/layout_trong.php");
		$this->renderBody();
	}
	public function doAdd(){
			$this->executeAdd();
			//quay tro lai trang user
			header("location:trang-chu");
	}
	}
?>