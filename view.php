<?php include 'connection.php'; ?>
<table border="1px" cellpadding="10px" cellspacing="0">
  <a href="index.php">Home</a>

   <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th colspan="2">Actions</th>
   </tr>
 <?php
  $query="SELECT * FROM student";
  $data=mysqli_query($con,$query);
  $result=mysqli_num_rows($data);
  if ($result) {
   while ($row=mysqli_fetch_array($data)){
    ?>
       <tr>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['lastname'];?></td>
        <td><?php echo $row['age'];?></td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a onclick="return confirm ('Are you sure, you want to delete?')" 
        href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
       </tr>
     <?php
    }
  }
  ?>

</table>