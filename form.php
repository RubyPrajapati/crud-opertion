<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<style>
    *{
        background-image: linear-gradient(to right,rgb(73, 12, 114),rgb(28, 28, 104));
    }
</style>
<body>
        <div class="container">
            <h1 class="text-white">Registration Form</h1>
            <form method="post" action="#">
            <div class="form-group">
        <div class="col-lg-3 text-white font-weight-bold">
        <label>Firstname</label>
        <input type="text" name="fn" placeholder="enter a username" required="" class="form-control text-white">
        </div>
        </div>
        <div class="form-group">
        <div class="col-lg-3 text-white font-weight-bold">
        <label>lastname</label>
        <input type="text" name="ln" placeholder="enter a lastname" required="" class="form-control text-white">
        </div>
        </div>
        <div class="form-group ">
        <div class="col-lg-3 text-white font-weight-bold ">
        <label>password</label>
        <input type="password" name="pass" placeholder="enter a password" required="" class="form-control text-white">
        </div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 text-white font-weight-bold">
                <label>Confirm-password</label>
                <input type="password" name="cp" placeholder="confirm_password" class="form-control text-white" required="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 text-white font-weight-bold">
                <label>Email-Id</label>
                <input type="text" name="email" placeholder="enter a email-id" class="form-control text-white" required="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 text-white font-weight-bold">
            Gender:
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender"   value="male">Male
  <input type="radio" name="gender"  value="other">Other
            </div>
        </div>
        <input type="submit" class="text-white" name="submit">
    </form>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
    $name=$_REQUEST['fn'];
    $lastname=$_REQUEST['ln'];
    $password=$_REQUEST['pass'];
    $confirm_password=$_REQUEST['cp'];
    $email=$_REQUEST['email'];
    $gender=$_REQUEST['gender'];
    if(strlen($name)<=5)
    {
        echo "username should be more than 5 character";
    }
    }
    
    
    ?>
</body>
</html>