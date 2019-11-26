<?php
	
	
	namespace app\controllers;
	
	
	use Yii;
	
	class PostController
		extends AppController
	{
		
		public $layout = 'basic';
		
		public function actionIndex()
		{
//			$data = '';
			if (Yii::$app->request->isAjax){
				debug(Yii::$app->request->post());
				return 'test';
			}
			return $this->render('test');
		}
		
		public function actionShow()
		{
//			$this->layout = 'basic';
//			$dump = $this->debug(Yii::$app);
			return $this->render('show');
		}
	}