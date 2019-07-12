<?php 
	//class nay se duoc ke thua o class loginController
	trait loginModel{
		//ham lay mot ban ghi
		public function find($email, $password){
			//lay bien ket noi de thao tac CSDL bang cach goi ham getInstance trong class Connection -> file core/connection.php
			$db = connection::getInstance();
			$query = $db->prepare("select id, email, fullname, password from tbl_user where email=:email");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("email"=>$email));
			//lay mot phan tu
			$result = $query->fetch();
			if(isset($result->email)){
				if($result->password == md5($password)){
					//dang nhap thanh cong

					$_SESSION["user_id"] = $result->id;
					$_SESSION["user_name"] = $result->fullname;

					//di chuyen den duong dan
					header("location:trang-chu");
				}else if($result->password != md5($password))
				{
					echo"<script>alert('Sai tài khoản hoặc mật khẩu!')</script>";
					//di chuyen den duong dan
					header("location:dang-nhap");
				}
			}else
				//di chuyen den duong dan
				header("location:trang-chu");
		}
	}
 ?>