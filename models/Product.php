<?php
	
	
	namespace app\models;
	
	
	use yii\db\ActiveRecord;
	
	class Product
		extends BaseModel
	{
		public function getCategories()
		{
			return $this->hasOne(Category::className(), ['id' => 'parent']);
		}
	}