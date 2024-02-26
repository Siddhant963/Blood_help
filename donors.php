<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-dark text-white">
    <?php include('header.php');
    include('curd/db.php'); ?>
   <div class="container ">
    <h1 class="text-center ">Search Donors..</h1>
    <form action="donors.php" method ="POST">
    <div class="row text-center my-5">
        <div class="col">
            <label for="" class="sr-only">City</label>
            <input type="text"  name="city"">
        </div>
        <div class="col">
            <label for="" class="sr-only">State</label>
            <input type="text " name="state">
        </div>
        <div class="col">
            <input class="btn btn-primary" type="Submit" name="search" id="" value= "Search">
        </div>
    </div>
    </form>

    <?php 
     
        $qry = "select * from donor ";
        $result=mysqli_query($con , $qry);
        ?> 
        <table class="table table-striped table-bordered bg-white text-center">
            <thead>
                <th>Name</th>
                <th>Email_id</th>
                <th>Phone_no.</th>
                <th>Gender</th>
                <th>Blood_group</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
            </thead>
            <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr>

                <td><?php echo $data['name'];?></td>
                <td><?php echo $data['email_id'];?></td>
                <td><?php echo $data['phone_no'];?></td>
                <td><?php echo $data['gender'];?></td>
                <td><?php echo $data['blood_group'];?></td>
                <td><?php echo $data['address'];?></td>
                <td><?php echo $data['city'];?></td>
                <td><?php echo $data['state'];?></td>
            </tr>  
            <?php }  ?>  
            </tbody>
        </table>

   </div>
   <?php include('footer.php');?>
</body>
</html>