<?php

return [
	'review/add' => 'review/add',
	'review' => 'review/index',
	'user/registration' => 'user/registration',
	'user' => 'user/login',
	'cabinet/edit'=>'cabinet/edit',
	'cabinet' => 'cabinet/cabinet',
	'logout' => 'user/logout',
	'contact' => 'contact/contact',
	'category/([0-9]+)/page-([0-9]+)' => 'services/category/$1/$2',
	'category/([0-9]+)' => 'services/category/$1',
	'services/([0-9]+)' => 'services/view/$1',
	'services/excele'=> 'services/excele',
	'services' => 'services/services',

	'admin/news' => 'admin/news',
	'admin/galereya/add' => 'admin/galereyaadd',
	'admin/galereya' => 'admin/galereya',
	'admin/services' => 'admin/services',
	'admin/akcyi' => 'admin/akcyi',
	'admin/otziv' => 'admin/otziv',
	'admin' => 'admin/index',
	'' => 'main/index',

]

?>
