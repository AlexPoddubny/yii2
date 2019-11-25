<?php
	
	
	namespace app\controllers;
	
	
	class MyController
		extends AppController
	{
		public function actionIndex($id = null)
		{
			$hi = 'Hello, world';
			$names = ['Ivan', 'Petro', 'Olexiy'];
			return $this->render('index', compact('hi', 'names', 'id'));
		}
	}