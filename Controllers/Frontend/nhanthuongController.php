<?php 
	//load file model
	include "Models/Frontend/nhanthuongModel.php";
	class nhanthuongController extends baseController{
		public function index(){
			//---
			//set file view (cua mvc nay)
			$this->setView("Views/Frontend/nhanthuong.php");
			//set file tempalte
			$this->setLayout("Views/Frontend/layout.php");
			//xuat giao dien len man hinh
			$this->renderBody();
			//---
		}
	}
 ?>