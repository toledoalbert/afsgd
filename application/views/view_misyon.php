<?php 

$backgroundImage = "";//base_url()."img/ist1.jpg";
$header = "Misyonumuz";
$caption = "AFS Gonulluleri Dernegi dunya barisi adina hizmet vermektedir! <br> Blah blah blah!";
$arrowDown = True;

?>

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