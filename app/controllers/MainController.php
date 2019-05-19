<?php 

namespace app\controllers;
use \RedBeanPHP\R;
use mast\Cache;

class MainController extends AppController
{
	
	public function indexAction()
	{
		$posts = R::findAll('test');
		$post = R::findOne('test', 'id=?', [2]);

		$this->setMeta('Главная сраница', 'Описание...', 'Ключевики...');
		$name = 'John';
		$age = 32;
		$names = ['Stas', 'Ana', 'Vova', 'Mike'];
		$cache = Cache::instance();
		// $cache->set('test', $names);
		//$cache->delete('test');
		$data = $cache->get('test');
		if(!$data) {
			$cache->set('test', $names);
		}
		debug($data);
		$this->set(compact('name', 'age', 'names', 'posts'));
	}

}