<?php 

	include "Models/Frontend/userModel.php";
	class userController extends baseController{
		//ke thua userModel, co nghia la cac ham trong clas userModel deu co the truy cap tu class userController
		use userModel;
		//ham tao la ham duoc goi dau tien trong MVC nay
		//action listUser
		public function infoUser(){
			$id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
			$record = $this->fetchOne();
			//set view
			$this->setView("Views/Frontend/user.php",array("id"=>$id,"record"=>$record));
			//set template
			$this->setLayout("Views/Frontend/layout_trong.php");
			//xuat html
			$this->renderBody();
		}
		//edit user
		public function edit(){		
			//bien id truyen tu url
			$id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
			$form_action="index.php?area=admin&controller=user&action=doEdit&id=$id";
			//lay mot ban ghi
			$record = $this->fetchOne();//ham tu class userModel
			//---
			//set duong dan cua file tempate
			$this->setLayout("Views/Frontend/layout_trong.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			/*
				bien $record de hien thi thong tin fullname, email
				bien $form_action de xuat gia tri vao thuoc tinh action cua the form: <form action="...">
			*/
			$this->setView("Views/Frontend/user",array("record"=>$record,"form_action"=>$form_action));
			//hien thi noi dung len man hinh
			$this->renderBody();
			//---
		}
		public function edit_password(){		
			//bien id truyen tu url
			$id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
			$form_action="index.php?area=admin&controller=user&action=doEdit1&id=$id";
			//lay mot ban ghi
			$record = $this->fetchOne();//ham tu class userModel
			//---
			//set duong dan cua file tempate
			$this->setLayout("Views/Frontend/layout_trong.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			/*
				bien $record de hien thi thong tin fullname, email
				bien $form_action de xuat gia tri vao thuoc tinh action cua the form: <form action="...">
			*/
			$this->setView("Views/Frontend/doi-mk.php",array("record"=>$record,"form_action"=>$form_action));
			//hien thi noi dung len man hinh
			$this->renderBody();
			//---
		}
		//do edit user
		public function doEdit(){
			$this->executeEdit(); //ham nay trong class userModel
			//quay tro lai trang user
			header("location:thong-tin-ca-nhan");
		}
		public function doEdit1(){
			$this->executeEdit1(); //ham nay trong class userModel
			//quay tro lai trang user
			header("location:trang-chu");
		}

	}
 ?>