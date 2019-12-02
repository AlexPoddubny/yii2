<?php
	
	
	namespace app\models;
	
	
	class TestForm
		extends BaseModel
	{
		
		public static function tableName()
		{
			return 'posts';
		}
		
		public function attributeLabels()
		{
			return [
				'name'  => 'Имя',
				'email' => 'E-mail',
				'text'  => 'Текст сообщения',
			];
		}
		
		public function rules()
		{
			return [
				[['name', 'text'], 'required'],
				['email', 'email'],
			];
		}
	}