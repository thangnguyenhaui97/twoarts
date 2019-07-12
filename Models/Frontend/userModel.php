<?php 
	/*
	* File name: Models/Backend/userModel.php
	* Loai file: file model trong mo hinh MVC	
	*/
	trait userModel{

		public function fetchOne(){
			$id = isset($_SESSION['user_id'])?$_SESSION['user_id']:0;
			$record = db::get_one("select * from tbl_user where id=$id");
			return $record;
		}
		public function executeEdit(){
			//---------
			//lay danh sach cac bien
			//bien id truyen tu url
			$id = isset($_SESSION['user_id'])?$_SESSION['user_id']:0;

			//cac bien la form-control trong view		
			$fullname = $_POST["fullname"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			//---------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance(); //Core/connection.php
			//update email, fullname tuong ung voi ban ghi co id truyen vao
			$query = $db->prepare("update tbl_user set fullname=:fullname, address=:address, phone=:phone where id=:id");
			$query->execute(array("fullname"=>$fullname, "address"=>$address, "phone"=>$phone,"id"=>$id));
			//neu password khong NULL thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				//update email, fullname
				$query = $db->prepare("update tbl_user set password=:password where id=:id");
				$query->execute(array("password"=>$password,"id"=>$id));
			}
		}
		public function executeEdit1(){
			//---------
			//lay danh sach cac bien
			//bien id truyen tu url
			$id = isset($_SESSION['user_id'])?$_SESSION['user_id']:0;
			$password = $_POST["password-new"];
			$repassword = $_POST["re-password"];
			//---------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance(); //Core/connection.php

			if($password == $repassword){
				//ma hoa password
				$password = md5($password);
				//update email, fullname
				$query = $db->prepare("update tbl_user set password=:password where id=:id");
				$query->execute(array("password"=>$password,"id"=>$id));
			}

		}
	}
 ?>