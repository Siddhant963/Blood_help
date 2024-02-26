  <?php
   include('db.php');

 if(isset($_POST['donor_add'])){ 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $Dob = $_POST['Dob'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $password = md5($_POST['password']);
    $conpass = md5($_POST['conpass']);

    if($password != $conpass){ 
        $msg = "password and confirm password are not matched";
        header('location:registration.php?msg='.$msg);


    } else{ 
        print_r($phone_no);
        $qry= "insert into donor (name , email_id , phone_no , dob , gender ,blood_group, address , city, state ,password ) 
        values ('$name' , '$email', '$phone_no', '$Dob' , '$gender' ,'$blood_group', '$address' ,'$city' , '$state' , '$password')";
        print_r($qry);
        $result = mysqli_query($con,$qry);
        if($result){ 
            
        } else{ 
            echo "somthing is wrong";
        }

    }

 } 
   
    header('location:../donors.php?data='.$data);
   }


  ?>