<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/morph/bootstrap.min.css" integrity="sha512-P74ekVMF6EUCnLTSVOkPjp3DWmXYmTHmr+Q3dMnVqH8e1O2z2vYtSEHEprV2Xsc7fT3wrLp7bUoI6nR/fwU7Gg==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <title>Form</title>
</head>

<body>

  <div class="container mt-4">

    <div class="col-md-12  contact-form__wrapper border border-primary rounded-3 p-5 order-lg-1">
      <h1 class="display-4">Fill the Developer's Details</h1>
      <form action="form.php" method="POST" class="contact-form form-validate" novalidate="novalidate">
        <div class="row">

          <div class="col-sm-12 mb-3">
            <div class="form-group">
              <label class="required-field" for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John">
            </div>
          </div>

          <div class="col-sm-12 mb-3">
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe">
            </div>
          </div>

          <div class="col-sm-12 mb-3">
            <div class="form-group">
              <label class="required-field" for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="abc@example.com">
            </div>
          </div>

          <div class="col-sm-12 mb-3">
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="(+91) 1234540545">
            </div>
          </div>

          <div class="col-sm-12 mb-3">
            <div class="form-group">
              <label class="required-field" for="firstName">Github</label>
              <input type="text" class="form-control" id="Github" name="Github" placeholder="https://github.com/username">
            </div>
          </div>

          <div class="col-sm-12 mb-3">
            <div class="form-group">
              <label class="required-field" for="firstName">LinkedIn</label>
              <input type="text" class="form-control" id="typee" name="linkedin" placeholder="https://linkedin.com/in/username">
            </div>
          </div>

          <div class="col-sm-12 mb-3 text-center">
            <button type="submit" name="submit" class="btn btn-lg btn-success"><a href="cards.php">View all Developers</a></button>
            <button type="submit" name="submit" class="btn btn-lg btn-success">Submit</button>
          </div>

        </div>
      </form>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>


<?php
$db = mysqli_connect("localhost", "root", "", "DevP", 3308);

if (isset($_POST['submit'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['Github']) && !empty($_POST['linkedin'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $Github = $_POST['Github'];
        $linkedin = $_POST['linkedin'];

        $query = "INSERT INTO devs (firstName,lastName,email,phone,Github,linkedin) VALUES ('$firstName' , '$lastName' , '$email' , '$phone' , '$Github' , '$linkedin' )";
        $run = mysqli_query($db, $query) or die(mysqli_error());
        if ($run) {
            // echo"Form Submitted Successfully";
          $alert="<script> alert('Form Submitted Successfully')</script>";
          echo $alert;
        } else {
            $alert="<script> alert('Form is not Submitted')</script>";
          echo $alert;
        }


    } else {
        $alert="<script> alert('All Fields are required')</script>";
          echo $alert;
    }

}

?>
