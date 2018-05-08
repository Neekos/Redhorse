<?php 

set_include_path(get_include_path().PATH_SEPARATOR.realpath(__DIR__."/components/")); 
require_once 'components/config.php';
//function __autoload($name_class) {require_once $name_class.'.php';} //автозагрузка классов из папки

$object = new stdClass(); // Создаём объект
foreach( $_REQUEST as $key=>$val )  $object->$key = sanitize($val); //получаем переменные

include('/components/PHPExcel/PHPExcel.php');

include('/components/PHPExcel/PHPExcel/IOFactory.php');

include('/components/PHPExcel/PHPExcel/Reader/Excel2007.php');
include('/components/PHPExcel/PHPExcel/Reader/DefaultReadFilter.php');
include('/components/PHPExcel/PHPExcel/Settings.php');
include('/components/PHPExcel/PHPExcel/Shared/File.php');
include('/components/PHPExcel/PHPExcel/ReferenceHelper.php');
include('/components/PHPExcel/PHPExcel/Calculation.php');
include('/components/PHPExcel/PHPExcel/Calculation/Function.php');
include('/components/PHPExcel/PHPExcel/CalcEngine/CyclicReferenceStack.php');
include('/components/PHPExcel/PHPExcel/CalcEngine/Logger.php');
include('/components/PHPExcel/PHPExcel/Worksheet.php');
include('/components/PHPExcel/PHPExcel/CachedObjectStorageFactory.php');
include('/components/PHPExcel/PHPExcel/CachedObjectStorage/Memory.php');
include('/components/PHPExcel/PHPExcel/Worksheet/PageSetup.php');
include('/components/PHPExcel/PHPExcel/Worksheet/PageMargins.php');
include('/components/PHPExcel/PHPExcel/Worksheet/HeaderFooter.php');
include('/components/PHPExcel/PHPExcel/Worksheet/SheetView.php');
include('/components/PHPExcel/PHPExcel/Worksheet/Protection.php');
include('/components/PHPExcel/PHPExcel/Worksheet/RowDimension.php');
include('/components/PHPExcel/PHPExcel/Worksheet/ColumnDimension.php');
include('/components/PHPExcel/PHPExcel/Worksheet/AutoFilter.php');
include('/components/PHPExcel/PHPExcel/DocumentProperties.php');
include('/components/PHPExcel/PHPExcel/DocumentSecurity.php');
include('/components/PHPExcel/PHPExcel/Style.php');
include('/components/PHPExcel/PHPExcel/Style/Font.php');
include('/components/PHPExcel/PHPExcel/Style/Color.php');
include('/components/PHPExcel/PHPExcel/Style/Fill.php');
include('/components/PHPExcel/PHPExcel/Style/Borders.php');
include('/components/PHPExcel/PHPExcel/Style/Border.php');
include('/components/PHPExcel/PHPExcel/Style/NumberFormat.php');
include('/components/PHPExcel/PHPExcel/Style/Alignment.php');
include('/components/PHPExcel/PHPExcel/Style/Protection.php');
include('/components/PHPExcel/PHPExcel/Reader/Excel2007/Theme.php');
include('/components/PHPExcel/PHPExcel/Shared/Date.php');
include('/components/PHPExcel/PHPExcel/Cell.php');
include('/components/PHPExcel/PHPExcel/Cell/DataType.php');
include('/components/PHPExcel/PHPExcel/Cell/DefaultValueBinder.php');
include('/components/PHPExcel/PHPExcel/WorksheetIterator.php');

	class Services
	{

		public static function getXLS($xls){
		  $pExcel = PHPExcel_IOFactory::load($xls);
		  foreach ($pExcel->getWorksheetIterator() as $worksheet) {
		      $worksheetTitle     = $worksheet->getTitle();
		      $highestRow         = $worksheet->getHighestRow(); // например, 10
		      $highestColumn      = $worksheet->getHighestColumn(); // например, 'E'
		      $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
		      $nrColumns = ord($highestColumn) - 64;
		      
		      $all_rows=$highestRow;
		      $all_colls=$highestColumn;
		      
		      for ($row = 1; $row <= $highestRow; $row++) {// Цикл по строкам
		       
		          
		          for ($col = 0; $col < $highestColumnIndex; $col++) {// Цикл по колонкам
		              $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
		             
		              $data[$col][$row]=$value;
		          }       
		      	}
  			}
		  return $data;
		}
		/*
			$field - название поля
			$data - исходный массив
			$n - номер колонки слева с нуля
			$data_res - получивщийся массив
		*/

		public static function convert_arr($data, $field, $n, $mas=NULL){ //сконвертировать результат с колонок в строчный
		  $i=0;
		  foreach($data[$n] as &$item) {
		    $i++;
		    $mas[$i][$field]=$item; 
		  }
		  return $mas;
		}
		
		public static function getallServices()
		{
			$db = Db::getConnection();

			$servicesList = [];

			$sql = 'SELECT 
						products.id as Nomer ,
						number_of_lessons.number as number,
						products.zam as frost ,
						products.price_weekdays as price_weekdays , 
						products.price_weekend as price_weekend , 
						services.id as id ,
						services.title as Name ,
						services.discription as Description  
						 
						
					FROM services
						LEFT JOIN products ON services.id = products.id_services
						LEFT JOIN number_of_lessons ON number_of_lessons.id = products.id_number';

			$result = $db->query($sql);

			$i = 0;

			while ($row = $result->fetch()) {
				$servicesList[$i]['id'] = $row['id'];
				$servicesList[$i]['number'] = $row['number'];
				$servicesList[$i]['frost'] = $row['frost'];
				$servicesList[$i]['Nomer'] = $row['Nomer'];
				$servicesList[$i]['Name']= $row['Name'];
				$servicesList[$i]['Description']= $row['Description'];
				$servicesList[$i]['price_weekend']= $row['price_weekend'];
				$servicesList[$i]['price_weekdays']= $row['price_weekdays'];
				$i++;
			}
			return $servicesList;
		}


		public static function gettable($idtable){
			$db = Db::getConnection();
			$twolist = [];


			$result = $db->query('SELECT 
						products.id as Nomer2 ,
						number_of_lessons.number as number2,
						products.zam as frost2 ,
						products.price_weekdays as price_weekdays2 , 
						products.price_weekend as price_weekend2    
						 
						
					FROM products
						LEFT JOIN services ON services.id = products.id_services
						LEFT JOIN number_of_lessons ON number_of_lessons.id = products.id_number
					WHERE products.id_services = '. $idtable);

			$i = 0;

			while ($row = $result->fetch()) {
				
				$twolist[$i]['number2'] = $row['number2'];
				$twolist[$i]['frost2'] = $row['frost2'];
				$twolist[$i]['Nomer2'] = $row['Nomer2'];
				
				
				$twolist[$i]['price_weekend2']= $row['price_weekend2'];
				$twolist[$i]['price_weekdays2']= $row['price_weekdays2'];
				$i++;
			}
			return $twolist;
		}

		public static function getoneServices($id){

			$id = intval($id);
			if ($id) {
				$db = Db::getConnection();

				$products = [];

				$result = $db->query('
					SELECT 
						products.id as Nomer ,
						number_of_lessons.number as number,
						products.zam as frost ,
						products.price_weekdays as price_weekdays , 
						products.price_weekend as price_weekend , 
						services.id as id ,
						services.title as Name ,
						services.discription as Description  
						 
						
					FROM products
						RIGHT JOIN services ON services.id = products.id_services
						RIGHT JOIN number_of_lessons ON number_of_lessons.id = products.id_number
					WHERE services.id = 

						' . $id );
				$i = 0 ;

				while ($row = $result->fetch()) {
				$products[$i]['id'] = $row['id'];
				$products[$i]['number'] = $row['number'];
				$products[$i]['frost'] = $row['frost'];
				$products[$i]['Nomer'] = $row['Nomer'];
				$products[$i]['Name']= $row['Name'];
				$products[$i]['Description']= $row['Description'];
				$products[$i]['price_weekend']= $row['price_weekend'];
				$products[$i]['price_weekdays']= $row['price_weekdays'];
				$i++;
			}
			return $products;
			}
			
		}
	}

?>