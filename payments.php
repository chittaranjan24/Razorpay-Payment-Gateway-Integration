<?php require_once("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders - CSWEBDEV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 form-container">
				<h1>Payments | Orders</h1>
				<hr>
				<table class="table">
					<tr>
                        <th>Paid By </th>
                        <th>Payer Email</th>
                        <th>Txn Id </th>
						<th>Product Image</th>
						<th>Title</th>
						<th>Paid Amount</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Note</th>
                        <th>Order Date</th>
					</tr>
                    <?php 
                        $sql="SELECT * from products,payments WHERE products.pid=payments.pid order by payments.payid DESC "; 
                        $stmt = $db->prepare($sql);
                        $stmt->execute();
                        $rows=$stmt->fetchAll();
                        foreach ($rows as $row) 
                        {
                            echo '
                                <tr>
                                    <td>'.$row['firstname'].' '.$row['lastname'].'</td>
                                    <td>'.$row['payer_email'].'</td>
                                    <td>'.$row['txnid'].'</td>
                                    <td><img src="uploads/'.$row['image'].'" height="100"></td>
                                    <td>'.$row['title'].'</td>
                                    <td>'.$row['amount'].' INR</td>
                                    <td>'.$row['address'].'</td>
                                    <td>'.$row['mobile'].'</td>
                                    <td>'.$row['note'].'</td>
                                    <td>'.$row['payment_date'].'</td>
                                </tr>
                            ';
                        }
                    ?> 
		        </table> 
		    </div>
	    </div>	
    </div>   
</body>
</html>