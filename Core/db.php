<?php 	
	class db{
		//ham lay tat ca cac ban ghi
		public function get_all($sql, $arr = NULL){
			//lay bien ket noi
			$conn = connection::getInstance();
			//chuan bi truy van
            $query = $conn->prepare($sql);
            //xac dinh kieu duyet phan tu
            $query->setFetchMode(PDO::FETCH_OBJ);
            //thuc thi truy van
            $query->execute($arr);
            //lay toan bo du lieu
            $result = $query->fetchAll();
            return $result;
		}
		//ham lay mot ban ghi
		public function get_one($sql, $arr = NULL){
			//lay bien ket noi
			$conn = connection::getInstance();
			//chuan bi truy van
            $query = $conn->prepare($sql);
            //xac dinh kieu duyet phan tu
            $query->setFetchMode(PDO::FETCH_OBJ);
            //thuc thi truy van
            $query->execute($arr);
            //lay toan bo du lieu
            $result = $query->fetch();
            return $result;
		}
		//ham dem so luong ban ghi
		public function count($sql, $arr = NULL){
			//lay bien ket noi
			$conn = connection::getInstance();
			//chuan bi truy van
            $query = $conn->prepare($sql);
            //xac dinh kieu duyet phan tu
            $query->setFetchMode(PDO::FETCH_OBJ);
            //thuc thi truy van
            $query->execute($arr);
            //lay toan bo du lieu
            $result = $query->rowCount();
            return $result;
		}
            public function remove_unicode ($str){
                  $unicode = array(
                  'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
                  'd'=>'đ',
                  'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
                  'i'=>'í|ì|ỉ|ĩ|ị',
                  'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
                  'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
                  'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
                  'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
                  'D'=>'Đ',
                  'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
                  'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
                  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
                  'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
                  'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
                  );

                  foreach($unicode as $nonUnicode=>$uni){
                  $str = preg_replace("/($uni)/i", $nonUnicode, $str);
                  }
                  $str = str_replace(",", "", $str);
                  $str = str_replace(".", "", $str);       
                  $str = str_replace(" ", "-", $str);
                  $str = str_replace("?", "", $str);
                  $str = strtolower($str);
                  return $str;
            }
	}
 ?>