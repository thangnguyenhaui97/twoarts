<?php 
	//load file model
	include "Models/Frontend/productModel.php";
	class productController extends baseController{
		//ke thua class productModel
		use productModel;
		//ham chi tiet tin tuc
		public function detail(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$record = $this->fetchOne();
			//set view
			$this->setView("Views/Frontend/product_detail.php",array("id"=>$id,"record"=>$record));
			//set template
			$this->setLayout("Views/Frontend/layout_trong.php");
			//xuat html
			$this->renderBody();
		}
		public function all(){
			//-------------------------------
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//phan trang
			//tinh tong so ban ghi
			$total = $this->total();
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 2;
			//tinh so trang
			$num_page = ceil($total/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao tren trang hien tai
			$from = $p*$recordPerPage;
			//---
			//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
			$list_record = $this->fetchAll($from,$recordPerPage);	
			//-------------------------------		
			//set duong dan cua file tempate
			$this->setLayout("Views/Frontend/layout_trong.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			$this->setView("Views/Frontend/product_all.php", array("list_record"=>$list_record,"num_page"=>$num_page));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		public function category(){
			//lay bien id truyen tu url
			$category_id = isset($_GET["id"])?$_GET["id"]:0;
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			$total = $this->total_cate();
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 2;
			//tinh so trang
			$num_page = ceil($total/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao tren trang hien tai
			$from = $p*$recordPerPage;
			//---
			//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
			$list_record = $this->fetchAll_cate($from,$recordPerPage);	
			//-------------------------------		
			//set duong dan cua file tempate
			$this->setLayout("Views/Frontend/layout_trong.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			$this->setView("Views/Frontend/product_category.php", array("list_record"=>$list_record,"num_page"=>$num_page));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		public function type(){
			//lay bien id truyen tu url
			$type_id = isset($_GET["id"])?$_GET["id"]:0;
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			$total = $this->total_type();
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 2;
			//tinh so trang
			$num_page = ceil($total/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao tren trang hien tai
			$from = $p*$recordPerPage;
			//---
			//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
			$list_record = $this->fetchAll_type($from,$recordPerPage);	
			//-------------------------------		
			//set duong dan cua file tempate
			$this->setLayout("Views/Frontend/layout_trong.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			$this->setView("Views/Frontend/product_type.php", array("list_record"=>$list_record,"num_page"=>$num_page));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		public function hot(){
			//-------------------------------
			// $id = isset($_GET["id"])?$_GET["id"]:0;
			//phan trang
			//tinh tong so ban ghi
			$total = $this->total_hot();
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 1;
			//tinh so trang
			$num_page = ceil($total/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao tren trang hien tai
			$from = $p*$recordPerPage;
			//---
			//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
			$list_record = $this->fetchAll_hot($from,$recordPerPage);	
			//-------------------------------		
			//set duong dan cua file tempate
			$this->setLayout("Views/Frontend/layout_trong.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			$this->setView("Views/Frontend/product_hot.php", array("list_record"=>$list_record,"num_page"=>$num_page));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
	}
 ?>