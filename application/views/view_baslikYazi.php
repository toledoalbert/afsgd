
<div

	<?php 

		if($backgroundImage !== ""){
			echo 'style="background: url('.$backgroundImage.')'.$repeat.'; padding-bottom:250px;"';
		}

	?>

>

<h1 class="text-center <?php if ($arrowDown) echo "arrow-down"; ?>">
	<?php echo $header; ?>
</h1>

<p class="lead text-center">
	<?php echo $caption; ?>
</p>
</div>