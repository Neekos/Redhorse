<?php  
	//include('/components/PHPExcel.php');
	
	//include('/components/PHPExcel/PHPExcel_IOFactory.php');


	class ServicesController
	{

		Public static function ActionCategory($categoryId, $page = 1){
		
			$list = [];
			$list = Category::getCategoryList();
			
			$oneprod = Services::getoneServices();
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
			
				
			// $table = Services::gettable(1);
			$name = false;
			$email = false;
			$telephon = false;


			if (User::isGuest()) {
				

			}else{

				$userId = User::checkLogged();

				$user = User::getUser($userId);

				$name = $user['name'];
				$email = $user['email'];
				$telephon = $user['telephon'];
			}
			

			if (isset($_POST)) {
				
				$data = [];
				
				if (!empty($_POST['name'])) {
					$data['name'] = trim($_POST['name']);
				}
				if (!empty($_POST['email'])) {
					$data['email'] = trim($_POST['email']);
				}
				if (!empty($_POST['telephon'])) {
					$data['telephon'] = trim($_POST['telephon']);
				}
				if (!empty($_POST['product'])) {
					$data['product'] = trim($_POST['product']);
				}
				if (!empty($_POST['val1'])) {
					$data['val1'] = trim($_POST['val1']);
				}
				if (!empty($_POST['val2'])) {
					$data['val2'] = trim($_POST['val2']);
				}
				if (!empty($_POST['val3'])) {
					$data['val3'] = trim($_POST['val3']);
				}
				if (!empty($_POST['val6'])) {
					$data['val6'] = trim($_POST['val6']);
				}
				
				if (isset($data['name']) && isset($data['email']) && isset($data['telephon']) && isset($data['product']) && isset($data['val1']) && isset($data['val2']) && isset($data['val3']) && isset($data['val6']) ) {
					Services::getorder($data);
				}
			}

			require_once(ROOT. '/view/services/services.php');

			return true;
		}
		
		function ActionView($id)
		{

			$product = Services::getoneServices($id);


			require_once(ROOT. '/view/services/view.php');

			return true;
		}

		function ActionExcele(){

				// $data4 = Services::getXLS('exceleservices/individzan.xlsx');

				// //$data_res4 = Services::convert_arr($data4, 'title' , 0);
				// $data_res4 =Services::convert_arr($data4, 'id', 0);
				// $data_res4 =Services::convert_arr($data4, 'name', 1, $data_res4);
				// $data_res4 =Services::convert_arr($data4, 'zam', 2, $data_res4);
				// $data_res4 =Services::convert_arr($data4, 'priceone', 3, $data_res4);
				// $data_res4 =Services::convert_arr($data4, 'priceonev', 4, $data_res4);
				// $data_res4 =Services::convert_arr($data4, 'priceabo', 5, $data_res4);
				// $data_res4 =Services::convert_arr($data4, 'priceabov', 6, $data_res4);
				

				$data1 = Services::getXLS('exceleservices/katanie.xlsx');

				//$data_res4 = Services::convert_arr($data4, 'title' , 0);
				$data_res1 =Services::convert_arr($data1, 'id', 0);
				$data_res1 =Services::convert_arr($data1, 'time', 1, $data_res1);
				$data_res1 =Services::convert_arr($data1, 'bud', 2, $data_res1);
				$data_res1 =Services::convert_arr($data1, 'vix', 3, $data_res1);
				
				$data2 = Services::getXLS('exceleservices/indiv.xlsx');

				//$data_res4 = Services::convert_arr($data4, 'title' , 0);
				$data_res2 =Services::convert_arr($data2, 'id', 0);
				$data_res2 =Services::convert_arr($data2, 'oplata', 1, $data_res2);
				$data_res2 =Services::convert_arr($data2, 'zam', 2, $data_res2);
				$data_res2 =Services::convert_arr($data2, 'bud', 3, $data_res2);
				$data_res2 =Services::convert_arr($data2, 'vix', 4, $data_res2);

				$data3 = Services::getXLS('exceleservices/bazkurs.xlsx');

				$data_res3 =Services::convert_arr($data3, 'id', 0);
				$data_res3 =Services::convert_arr($data3, 'oplata', 1, $data_res3);
				$data_res3 =Services::convert_arr($data3, 'zam', 2, $data_res3);
				$data_res3 =Services::convert_arr($data3, 'bud', 3, $data_res3);
				$data_res3 =Services::convert_arr($data3, 'vix', 4, $data_res3);

				$data4 = Services::getXLS('exceleservices/shkolaver.xlsx');

				$data_res4 =Services::convert_arr($data4, 'id', 0);
				$data_res4 =Services::convert_arr($data4, 'oplata', 1, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'zam', 2, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'bud', 3, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'vix', 4, $data_res4);

				$data5 = Services::getXLS('exceleservices/ippo.xlsx');

				$data_res5 =Services::convert_arr($data5, 'id', 0);
				$data_res5 =Services::convert_arr($data5, 'oplata', 1, $data_res5);
				$data_res5 =Services::convert_arr($data5, 'zam', 2, $data_res5);
				$data_res5 =Services::convert_arr($data5, 'price', 3, $data_res5);
				

				$data6 = Services::getXLS('exceleservices/Arendahorse.xlsx');

				$data_res6 =Services::convert_arr($data6, 'id', 0);
				$data_res6 =Services::convert_arr($data6, 'count', 1, $data_res6);
				$data_res6 =Services::convert_arr($data6, 'timemin', 2, $data_res6);
				$data_res6 =Services::convert_arr($data6, 'timemax', 3, $data_res6);
				

				$data7 = Services::getXLS('exceleservices/Arendadogs.xlsx');

				$data_res7 =Services::convert_arr($data7, 'id', 0);
				$data_res7 =Services::convert_arr($data7, 'count', 1, $data_res7);
				$data_res7 =Services::convert_arr($data7, 'timemin', 2, $data_res7);
				$data_res7 =Services::convert_arr($data7, 'timemax', 3, $data_res7);

				$data8 = Services::getXLS('exceleservices/Arendaploshad.xlsx');

				$data_res8 =Services::convert_arr($data8, 'id', 0);
				$data_res8 =Services::convert_arr($data8, 'plosh', 1, $data_res8);
				$data_res8 =Services::convert_arr($data8, 'oplata', 2, $data_res8);
				$data_res8 =Services::convert_arr($data8, 'bud', 3, $data_res8);
				$data_res8 =Services::convert_arr($data8, 'vix', 4, $data_res8);

			require_once(ROOT. '/view/services/exel.php');

			return true;
		}

	}

?>