<?php
    $id=$_GET['id'];
    $name=$_GET['name'];
    $price=$_GET['price'];
    $img=$_GET['imgloc'];

   // echo $id;
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
    </tr>
    <tr>
        <td><?php echo  $id; ?></td>
        <td><?php  echo $name; ?></td>
        <td><?php  echo $price; ?></td>
        <td><img src="<?php  echo $img; ?>" height="200" width="200"></td>

    </tr>
</table>