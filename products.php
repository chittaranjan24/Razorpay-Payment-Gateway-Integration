<?php require_once("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - CSWEBDEV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
                <div class="col-sm-8 form-container">
                    <h1>PRODUCTS</h1>
                    <hr>
                    <a href="create-products.php" class="btn btn-primary" style="float:right;"> Create New </a>
                    <table class="table">
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Price</th>
                        </tr>

                        <?php 
                            $sql="SELECT * from products order by pid DESC"; 
                            $stmt = $db->prepare($sql);
                            $stmt->execute();
                            $rows=$stmt->fetchAll();
                            foreach ($rows as $row) 
                            {
                                echo '<tr>
                                    <td><img src="uploads/'.$row['image'].'" height="100"></td>
                                    <td>'.$row['title'].'</td>
                                    <td>'.$row['price'].' INR</td>
                                </tr>';
                            }
                        ?>

                    </table>
                </div>
                    <div class="col-sm-2"></div>
        </div>
    </div>    
</body>
</html>