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

		
				$data = Services::getXLS('services/test.xlsx'); //извлеаем данные из XLS

				$data_res= Services::convert_arr($data,'id', 0);
				$data_res= Services::convert_arr($data, 'time', 1, $data_res);
				$data_res= Services::convert_arr($data, 'price_vixod', 2, $data_res);
				$data_res= Services::convert_arr($data, 'price_bud', 3, $data_res);
				$data_res= Services::convert_arr($data, 'sum', 4, $data_res);
				$data_res= Services::convert_arr($data, 'время', 6, $data_res);
				$data_res= Services::convert_arr($data, 'цена', 7, $data_res);
				$data_res= Services::convert_arr($data, 'Кол-во', 8, $data_res);
				

				$data2 = Services::getXLS('services/trener.xlsx');
				$data_res2= Services::convert_arr($data2,'№', 0);
				$data_res2= Services::convert_arr($data2, 'Имя', 1, $data_res2);
				$data_res2= Services::convert_arr($data2, 'Фамилия', 2, $data_res2);
				$data_res2= Services::convert_arr($data2, 'Стаж', 3, $data_res2);

				$data3 = Services::getXLS('services/katanie.xlsx');
				$data_res3 = Services::convert_arr($data3, '№', 0);
				$data_res3 = Services::convert_arr($data3, 'Время', 1, $data_res3);
				$data_res3 = Services::convert_arr($data3, 'Стоимость в выходные', 2, $data_res3);
				$data_res3 = Services::convert_arr($data3, 'Стоимость в будни', 3, $data_res3);

				$data4 = Services::getXLS('services/individzan.xlsx');

				//$data_res4 = Services::convert_arr($data4, 'title' , 0);
				$data_res4 =Services::convert_arr($data4, 'id', 0);
				$data_res4 =Services::convert_arr($data4, 'name', 1, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'zam', 2, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceone', 3, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceonev', 4, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceabo', 5, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceabov', 6, $data_res4);
				 var_dump($data_res4);

				
			

			require_once(ROOT. '/view/services/exel.php');

			return true;
		}

	}

?>