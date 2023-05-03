
<?php include ('connection.php');?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>submission form </title>
   
  </head>
  <body>
  <div class="container pl-5">
    <form method="post" action="save.php">
  
    <div class="form-group mb-3 row">
    <label >ID</label>
    <div class="col-sm-10">
    <input type="id" class="form-control"
    placeholder="enter your id" name="id" autocomplete="off">
    </div>
  </div>
  <div class="form-group mb-3 row">
    <label >Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control"
    placeholder="enter your name" name="name" autocomplete="off">
    </div>
  </div>

  <div class="form-group  mb-3 row">
    <label >Email</label>
    <div class="col-sm-10">
    <input type="email" class="form-control"
    placeholder="enter your Email" name="email" autocomplete="off">
    </div>
  </div>

  <div class="form-group">
    <label >Mobile</label>
    <div class="col-sm-10">
    <input type="text" class="form-control"
    placeholder="enter your mobile number" name="mobile" autocomplete="off">
    </div>
  </div>

  <div class="form-group">
    <label >Password</label>
    <div class="col-sm-10">
    <input type="password" class="form-control"
    placeholder="enter your password" name="password"autocomplete="off">
  </div>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form> 
    </div>
   
    
  </body>
</html>

<!-- <!doctype html>
<html lang="en">
  <head>
     Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 -->

    <!-- <title>form</title>
  </head>
  <body> --> 
   
    <!-- <form class="row g-3">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
</form>
   
  </body>
</html> -->