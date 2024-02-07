<?php include 'connection.php';
    if (isset($_POST['save_btn'])){
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];
        $query="INSERT INTO student (firstname,lastname,age) VALUES('$fname','$lname','$age')";
        $data=mysqli_query($con,$query);
        if($data){
            ?>
            <script type="text/javascript">
              alert("Data Saved Successfully");
            </script>
            <?php
        }

        else
        {
        ?>
        <script type="text/javascript">
          alert("Please try again");
        </script>
        <?php

    }
}

    ?>