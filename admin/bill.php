<?php include "../include/config.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>North Bihar Power Distribution Limited</title>
        <link href="../bootstrap.css" rel="stylesheet">
    </head>
    <body class="bg-dark">
       <?php include "include/header.php";?>
       <div class="container mt-3">
           <div class="row">
               <div class="col-lg-7 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <center><h4 class="text-danger">Consumer's bills</h4></center>
                    <hr>
                     <form action="bill.php" method="post">
                           <div class="form-group">
                            <label for="user_id">User Id</label>
                            <select  type="text" name="user_id" class="form-control">
                                
                            </select>
                        </div>
                           <div class="form-group">
                            <label for="unit">Unit</label>
                            <input type="number" name="unit" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="decimal" name="amount" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="back_due">Back Due</label>
                            <input type="decimal" name="back_due" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="date_of_billing">Date Of Billing</label>
                            <input type="date" name="date_of_billing" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="due_date">Due Date</label>
                            <input type="date" name="due_date" class="form-control">
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
        'user_id' => $_POST['user_id'],
        'unit' => $_POST['unit'],
        'amount' => $_POST['amount'],
        'back_due' => $_POST['back_due'],
        'date_of_billing' => $_POST['date_of_billing'],
        'due_date' => $_POST['due_date'],
    ];
    insertBill('bill',$data);
}
?>