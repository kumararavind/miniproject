<?php
	include('con_db.php');
	$vtype=$_GET['q'];
	if($vtype=='two wheeler')
	{
		?>
		<option value="">Select Brand</option>
		<option value="bajaj">Bajaj</option>
		<option value="suzuki">Suzuki</option>
		<option value="hero">Hero</option>
<?php 
	}
		else if($vtype=='three wheeler')
		{
			?>
			<option value="">Select Brand</option>
		<option value="bajaj">Bajaj</option>
		<option value="tvs">TVS</option>
		<option value="tata">Tata</option>
	<?php
		}
		else if($vtype=='four wheeler')
		{
		?>
		<option value="">Select Brand</option>
		<option value="bmw">BMW</option>
		<option value="suzuki">Suzuki</option>
		<option value="benz">BENZ</option>
		<?php }

 ?>