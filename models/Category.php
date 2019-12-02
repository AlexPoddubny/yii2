<?php
	
	
	namespace app\models;
	
	
	use yii\db\ActiveRecord;
	
	class Category
		extends BaseModel
	{
		public function getProducts()
		{
			return $this->hasMany(Product::className(), ['parent' => 'id']);
		}
	}