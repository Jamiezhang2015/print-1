<?php

namespace API\Model;
use Think\Model\ViewModel;

class FileViewModel extends ViewModel
{
	public $viewFields = array(
		'file'            => array(
			'id',
			'use_id',
			'pri_id',
			'name',
			'url',
			'time',
			'status',
			'copies',
			'double_side',
		) ,
		'user'            => array(
			'name'=>'use_name',
			'student_number',
			'_on'            => 'user.id=file.use_id',
		) ,
	);
}
