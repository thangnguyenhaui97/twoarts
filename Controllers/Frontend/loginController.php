<?php 
	//load file loginModel.php (model)
	include "Models/Frontend/loginModel.php";
	class loginController extends baseController{
		//goi trait loginModel de thao tac
		//ke thua class loginModel
		use loginModel;
		public function index(){
			$this->setView("Views/Frontend/login.php");
			$this->setLayout("Views/Frontend/layout_trong.php");
			$this->renderBody();
		}
		public function doLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];	
			//goi ham find() trong class loginModel
			$this->find($email,$password);		
		}
		//action logout
		public function logout(){
			//huy session
			unset($_SESSION["user_id"]);
			unset($_SESSION["user_name"]);
			//quay tro lai trang login
			header("location:dang-nhap");
		}
	}
 ?>

 