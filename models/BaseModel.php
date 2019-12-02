<?php
	
	
	namespace app\models;
	
	
	use yii\db\ActiveRecord;
	
	class BaseModel
		extends ActiveRecord
	{
		public static function tableName()
		{
			$name = strtolower(static::className());
			$l = substr($name, -1);
			switch ($l){
				case 's':
					return $name . 'es';
					break;
				case 'y':
					return substr($name, strlen($name) - 1) . 'ies';
					break;
				default:
					return $name . 's';
			}
		}
	}