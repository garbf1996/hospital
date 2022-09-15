<?php
include('include/config.php');
if(!empty($_POST["especializacion"])) 
{

 $sql=mysqli_query($con,"select doctor_nombre,id from doctors where especializacion='".$_POST['especializacion']."'");?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctor_nombre']); ?></option>
  <?php
}
}


if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"select precio from doctors where id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['precio']); ?>"><?php echo htmlentities($row['precio']); ?></option>
  <?php
}
}

?>
