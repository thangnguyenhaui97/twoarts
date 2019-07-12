<?php
	trait checkoutModel{
		public function user(){
			$user_id = $_SESSION['user_id'];
			return $user_id;

		}
		public function insert_order($user_id){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$address = $_POST["address"];
			//lay bien ket noi csdl
			$conn = connection::getInstance();
			$query = $conn->prepare("insert into tbl_order set user_id=:user_id, name=:name, email=:email, phone=:phone, address=:address");
			$query->execute(array("user_id"=>$user_id,"name"=>$name,"email"=>$email,"phone"=>$phone,"address"=>$address));
			$order_id = $conn->lastInsertId();//ham nay cua PDO
			//tra ve ket qua
			return $order_id;
		}
		public function insert_order_detail($user_id, $order_id){
			//lay bien ket noi csdl
			$conn = connection::getInstance();
			foreach($_SESSION['cart'] as $key=>$product){
				$query = $conn->prepare("insert into tbl_order_detail set order_id=:order_id, product_id=:product_id");
				$query->execute(array("order_id"=>$order_id,"product_id"=>$product["id"]));
			}
		}
	}
 ?>