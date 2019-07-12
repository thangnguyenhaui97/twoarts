<?php 
	trait registrationModel{
		public function executeAdd(){
			//lay cac bien: la cac form-control trong view
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			//ma hoa password
			$password = md5($password);
			//-------------------------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();
			//update email, fullname
			$query = $db->prepare("insert into tbl_user set fullname=:fullname , email=:email,address=:address, phone=:phone, password=:password");
			//truyen cac bien tuong ung voi cau truy van. VD :password trong cau sql thi phai truyen bien password vao
			$query->execute(array("fullname"=>$fullname,"email"=>$email, "address"=>$address, "phone"=>$phone, "password"=>$password));
			//-------------------------		
		}
	}
?>