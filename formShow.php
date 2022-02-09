<?php
$v1=$_POST['name'];
$v2=$_POST['course'];

?>

<form action='hidden3.php' method='Post'>
<input type='hidden' name="name" value="<?php echo $v1; ?>">
<input type='hidden' name="course" value="<?php echo $v2; ?>">
marks:<input type="text" name="marks">
<button type="submit">submit</button>


</form>