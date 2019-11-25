<?php
	
	
	namespace app\controllers;
	
	
	use Yii;
	
	class PostController
		extends AppController
	{
		public function actionTest()
		{
			$names = ['Ivan', 'Petro', 'Olexiy'];
			$dump = $this->debug($names);
			return $this->render('test', compact('dump'));
		}
	}