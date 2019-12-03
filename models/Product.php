<?php
	
	
	namespace app\models;
	
	
	class Product
		extends BaseModel
	{
		public function getCategories()
		{
			return $this->hasOne(Category::className(), ['id' => 'parent']);
		}
	}