<?php 
	include "Models/Frontend/checkoutModel.php";
	class checkoutController extends baseController{
	//hien thi gio hang
		use checkoutModel;
		public function index(){
			/*
				set view co 2 cach
				cach1: setview khong co truyen array la danh sach cac bien de su dung o view
				cach2: setview co truyen array la danh sach cac bien de su dung o view
			*/
				$this->setView("Views/Frontend/checkout.php");
				$this->setLayout("Views/Frontend/layout_trong.php");
				$this->renderBody();
			}
		public function bill(){
			//insert du lieu vao table tbl_customer -> tra ve customer_id
			$user_id = $this->user();
			//insert du lieu vao table tbl_order -> tra ve order_id
			$order_id = $this->insert_order($user_id);
			//insert du lieu vao table tbl_order_detail
			$this->insert_order_detail($user_id,$order_id);
			//huy gio hang
			$_SESSION['cart'] = array();
			//quay tro lai trang gio hang
			header("location:gio-hang");
		}
	}
?>