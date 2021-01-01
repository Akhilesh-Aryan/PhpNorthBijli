<?php include "../include/config.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>North Bihar Power Distribution Limited</title>
        <link href="../bootstrap.css" rel="stylesheet">
    </head>
    <body class="bg-secondary">
       <?php include "include/header.php";?>
       <div class="container-fluid">
        <div class="row">
               <table class="table mx-auto text-white">
                   <tr class="text-white bg-success">
                       <th>Id</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Contact</th>
                       <th>Pan</th>
                       <th>Aadhar</th>
                       <th>City</th>
                       <th>State</th>
                       <th>Area</th>
                       <th>PinCode</th>
                       <th>Action</th>
                       <th>Status</th>
                   </tr>
                   <?php
                   $calling = callingRecord('user');
                   foreach($calling as $call):
                   ?>
                    <tr>
                   <td><?= $call['id'];?></td>
                   <td><?= $call['name'];?></td>
                   <td><?= $call['email'];?></td>
                   <td><?= $call['contact'];?></td>
                   <td><?= $call['pan'];?></td>
                   <td><?= $call['aadhar'];?></td>
                   <td><?= $call['city'];?></td>
                   <td><?= $call['state'];?></td>
                   <td class="col-lg-2"><?= $call['area'];?></td>
                   <td><?= $call['pin_code'];?></td>
                   <td>
                       <a href="index.php?del_record=<?= $call['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                       <td>
                        <?php if($call['status']==false):?>
                    <a href="index.php?id=<?= $call['id'];?>"class="btn btn-success btn-sm">Approve</a>
                    <?php else: ?>
                        <a class="btn btn-dark btn-sm text-white">Approved</a>
                    <?php endif;?>
                      </td>
                    </tr>
                   <?php endforeach;?>
               </table>
               
        </div>
       </div>        
    </body>
</html>
<?php
if(isset($_GET['del_record'])){
    $id = $_GET['del_record'];

    deleteData('user', "id = '$id'");
    redirect("index");
}
if(isset ($_GET['id'])){
    $id = $_GET['id'];
    updateData('user', "status='1'", "id='$id'");
    redirect("index");
}
?>