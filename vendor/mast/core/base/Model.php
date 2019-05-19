<?php 

namespace mast\base;
use mast\Db;

abstract class Model
{
	public $attributes = [];
	public $errors = [];
	public $rules = [];

	public function __construct()
	{
		Db::instance();
	}
}