<?php
//	$this->title = 'Article';

?>

<h1>Show Action</h1>
<?php use app\controllers\AppController;
	
	echo AppController::debug($cats);
	
?>

<?php //debug($cats)
	foreach ($cats as $c){
		echo $c->title . '<br>';
	}
?>
<!--<button class="btn btn-success" id="btn">Click me!</button>-->
<!---->
<?php
//	$js = <<<JS
//		$('#btn').on('click', function(){
//			$.ajax({
//				url: '/posts',
//				data: {test:'123'},
//				type: 'POST',
//				success: function() {
//				    console.log('URRA!');
//				},
//				error: function() {
//				    alert('Error!');
//				}
//			});
//		});
//JS;
//
//	$this->registerJs($js);
//?>