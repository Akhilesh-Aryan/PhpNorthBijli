<?php include "include/config.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>North Bihar Power Distribution Limited</title>
        <link href="bootstrap.css" rel="stylesheet">
    </head>
    <body class="bg-light">
       <?php include "include/header.php";?>
       <div class="container mt-3">
           <div class="row">
               <div class="col-lg-3">
                   <?php include "include/side.php";?>
               </div>
               <div class="col-lg-9 mx-auto">
                   
                    <div class="card">
                    <div class="card-body">
                    <h4 class="text-danger">Register here for new connection !</h4>
                    <hr>
                     <form action="new_connection.php" method="post">
                           <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="pan"> Pan no.</label>
                            <input type="text" name="pan" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="aadhar"> Aadhar</label>
                            <input type="text" name="aadhar" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="city"> City</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" name="state" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="area"> Area</label>
                            <input type="text" name="area" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="pin_code"> Pin Code</label>
                            <input type="number" name="pin_code" class="form-control">
                        </div>
                           <div class="form-group">
                            <input type="submit" name="send" class="form-control bg-success text-white display-block" >
                        </div>
                    </form>
                        </div>
                   </div>
               </div>
           </div>
       </div>        
    </body>
</html>
<?php
if(isset($_POST['send'])){
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $aadhar = $_POST['aadhar'];
    $pan = $_POST['pan'];
    if(checkData('user', "contact = '$contact'")){
        echo "<script>alert('contact already exist')</script>";
    }
    elseif(checkData('user', "email = '$email'")){
        echo "<script>alert('email already exist')</script>";
    }
    elseif(checkData('user', "aadhar = '$aadhar'")){
        echo "<script>alert('aadhar already exist')</script>";
    }
    elseif(checkData('user', "pan = '$pan'")){
        echo "<script>alert('pan number already exist')</script>";
    }
    else{
    $data = [
        'name'=> $_POST['name'],
        'email'=> $_POST['email'],
        'contact'=> $_POST['contact'],
        'pan'=> $_POST['pan'],
        'aadhar'=> $_POST['aadhar'],
        'city'=> $_POST['city'],
        'state'=> $_POST['state'],
        'area'=> $_POST['area'],
        'pin_code'=> $_POST['pin_code'],
    ];
    insertRecord('user',$data);
}
}
?>

