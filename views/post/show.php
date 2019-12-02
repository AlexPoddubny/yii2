<h1>Show Action</h1>
<?php
	use app\controllers\AppController;
//	echo AppController::debug($cats);
//	echo count($cats[0]->products);
//	echo AppController::debug($cats);
	foreach ($cats as $c){
		echo '<ul>';
			echo '<li>' . 'id: ' . $c->id . ': ' . $c->title . '</li>';
//			$products = $c->products;
			foreach ($c->products as $p){
				echo '<ul>';
					echo '<li>' . $p->title . '</li>';
				echo '</ul>';
			}
		echo '</ul>';
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