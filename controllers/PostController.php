<?php
	
	
	namespace app\controllers;
	
	
	use app\models\Category;
	use app\models\TestForm;
	use Yii;
	
	class PostController
		extends AppController
	{
		
		public $layout = 'basic';
		
		public function actionIndex()
		{
//			if (Yii::$app->request->isAjax){
//				debug(Yii::$app->request->post());
//				return 'test';
//			}
			$model = new TestForm();
			if ($model->load(Yii::$app->request->post())){
//				debug($model);
//				die;
				if ($model->validate()){
					Yii::$app->session->setFlash('success', 'Data uploaded');
					return $this->refresh();
				} else {
					Yii::$app->session->setFlash('error', 'Data not uploaded');
				}
			}
			$this->view->title = 'All Articles';
			return $this->render('index', compact('model'));
		}
		
		public function actionShow()
		{
			$cats = Category::find()->all();
			return $this->render('show', compact('cats'));
		}
	}