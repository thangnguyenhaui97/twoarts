<?php 
	//start session
	session_start();
	//load file config
	include "config.php";
	//load file Connection.php
	include "Core/connection.php";
	//file Core/db.php chua cac ham de lay nhieu ban ghi, mot ban ghi, dem ban ghi
	include "Core/db.php";
	// 
	include "Models/Frontend/cartModel.php";
	//load file Controller
	include "Core/baseController.php";
	//load file Route.php -> dinh tuyen url de goi cac MVC
	include "Core/route.php";	
 ?>