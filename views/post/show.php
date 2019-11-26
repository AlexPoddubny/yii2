<h1>Show Action</h1>
<button class="btn btn-success" id="btn">Click me!</button>

<?php
	$js = <<<JS
		$('#btn').on('click', function(){
			$.ajax({
				url: '/posts',
				data: {test:'123'},
				type: 'POST',
				success: function() {
				    console.log('URRA!');
				},
				error: function() {
				    alert('Error!');
				}
			});
		});
JS;
	
	$this->registerJs($js);
?>