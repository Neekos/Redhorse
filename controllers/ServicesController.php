<?php  
	//include('/components/PHPExcel.php');
	
	//include('/components/PHPExcel/PHPExcel_IOFactory.php');


	class ServicesController
	{

		Public static function ActionCategory($categoryId, $page = 1){
		
			$list = [];
			$list = Category::getCategoryList();



			$categoryProduct = Category::getCategoryProduct($categoryId , $page);


			$TotalProduct = Category::getTotalProductCategory($categoryId);

			$pagination = new Pagination($TotalProduct , $page, Category::SHOW_BY_DEFAULT, 'page-');

			

			require_once(ROOT. '/view/services/category.php');

			return true;

		}

		public static function ActionServices()
		{
			$list = [];
			$list = Category::getCategoryList();

			$serviceslist =[];

			$serviceslist = Services::getallServices();



			require_once(ROOT. '/view/services/services.php');

			return true;
		}
		
		function ActionView($id)
		{

			$product = Services::getoneServices($id);

			var_dump($product);

			require_once(ROOT. '/view/services/view.php');

			return true;
		}

		function ActionExcele(){

				$data4 = Services::getXLS('exceleservices/individzan.xlsx');

				//$data_res4 = Services::convert_arr($data4, 'title' , 0);
				$data_res4 =Services::convert_arr($data4, 'id', 0);
				$data_res4 =Services::convert_arr($data4, 'name', 1, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'zam', 2, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceone', 3, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceonev', 4, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceabo', 5, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceabov', 6, $data_res4);
				// // var_dump($data_res4);

				
			

			require_once(ROOT. '/view/services/exel.php');

			return true;
		}

	}

?>