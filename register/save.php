<?php 
    if(isset($_POST['signup']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");

        $con = mysqli_connect("localhost","root","","tuto_register_file");

        $query = "insert into user (name,email,image,address) values ('$name','$email','$image','$address')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       

        header("location:../mdb/");
        
        }
        else {       

        header("location:index.html");

             }
    }else{
        header("location:index.html");
    }
?>