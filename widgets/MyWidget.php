<?php
	
	
	namespace app\widgets;
	
	
	use yii\base\Widget;
	
	class MyWidget
		extends Widget
	{
		public $name;
		
		public function init()
		{
			parent::init(); // TODO: Change the autogenerated stub
//			if ($this->name === null){
//				$this->name = 'Guest';
//			}
			ob_start();
		}
		
		public function run()
		{
			$content = mb_strtoupper(ob_get_clean());
			return $this->render('my', compact('content'));
		}
	}