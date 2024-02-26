<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Blood_help/registration</title>
</head>
<body>
<?php include('header.php'); ?>
<div class="main">
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
             <img src="imges/form2.webp"  alt="Sample photo" class="img-fluid "
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; width:100% ">
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Donors registration form</h3>

                <!-- form  -->
             <form action="curd/controller.php" method= "POST" >
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" name = "name" />
                      <label class="form-label" for="form3Example1m"> Full Name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="email" id="form3Example1n" class="form-control form-control-lg" name= "email" />
                      <label class="form-label" for="form3Example1n">Email id</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="number" id="form3Example1m1" class="form-control form-control-lg" name="phone_no" />
                      <label class="form-label" for="form3Example1m1">Phone no.</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="date" id="form3Example1n1" class="form-control form-control-lg" name="Dob" />
                      <label class="form-label" for="form3Example1n1">Date Of Birth</label>
                    </div>
                  </div>
                </div>

                

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="Female"   />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="Male"  />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="Others"  />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select  name= "blood_group"class="select">
                      <option value="">Blood group</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>

                    </select>

                  </div>
                 
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" class="form-control form-control-lg" name="address" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example9" class="form-control form-control-lg" name="city" />
                  <label class="form-label" for="form3Example9">City</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example90" class="form-control form-control-lg" name="state" />
                  <label class="form-label" for="form3Example90">State</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example99" class="form-control form-control-lg" name="password" />
                  <label class="form-label" for="form3Example99">password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example97" class="form-control form-control-lg" name="conpass" />
                  <label class="form-label" for="form3Example97">confirm password</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2" name="donor_add" >Submit form</button>
                </div>

              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
    
</body>
</html>