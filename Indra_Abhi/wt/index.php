<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Form</title>
</head>

<body>

  <div class="container mt-4">

    <div class="col-md-12  contact-form__wrapper border border-primary rounded-3 p-5 order-lg-1">
      <h1 class="display-4">Fill the Patient Details</h1>
      <form action="insert_patient.php" method="post" class="contact-form form-validate " novalidate="novalidate">
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
              <label class="required-field" for="firstName">Treatment</label>
              <input type="text" class="form-control" id="Treatment" name="Treatment" placeholder="John">
            </div>
          </div>

          <div class="col-sm-12 mb-3">
            <div class="form-group">
              <label class="required-field" for="firstName">Doctor</label>
              <input type="text" class="form-control" id="doctor" name="doctor" placeholder="">
            </div>
          </div>

          <div class="col-sm-12 mb-3 text-center">
            <button type="submit" name="submit" class="btn btn-lg btn-success">View all patients</button>
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