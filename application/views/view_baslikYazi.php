
<div

	<?php 

		if($backgroundImage !== ""){
			echo 'style="background-image: url('.$backgroundImage.');"';
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