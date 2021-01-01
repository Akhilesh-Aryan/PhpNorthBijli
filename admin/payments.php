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
       <div class="container mt-3">
           <div class="row">
               <div class="col-lg-7 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <center><h4 class="text-danger">Payment Information!</h4></center>
                    <hr>
                     <form action="payments.php" method="post">
                           <div class="form-group">
                            <label for="bill_id">Bill Id</label>
                            <input type="text" name="bill_id" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="decimal" name="amount" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="service_charge">Service Charge</label>
                            <input type="decimal" name="service_charge" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="mode">Payment Mode</label>
                            <input type="text" name="mode" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="date_of_payment">Date Of Payment</label>
                            <input type="date" name="date_of_payment" class="form-control">
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
    $data = [
        'bill_id' => $_POST['bill_id'],
        'amount' => $_POST['amount'],
        'service_charge' => $_POST['service_charge'],
        'mode' => $_POST['mode'],
        'date_of_payment' => $_POST['date_of_payment'],
    ];
    insertPayment('payment',$data);
}
?>