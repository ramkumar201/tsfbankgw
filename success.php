<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--   Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/success.css">
    <!--  Fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="icon" href="image/logo.png">
    <title>Donation Successfull - The Sparks Foundation</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <div class="payment">
                <div class="payment_header">
                    <div class="check">
                        <i class="fa fa-check" aria-hiden="true"></i>
                    </div>
                </div>
                <?php
                        include 'src/Instamojo.php';
                        $api = new Instamojo\Instamojo("test_cc3cbe30c503d93ab7cc89dad89", "test_e812273d85c007fc973ca2abc74", 'https://test.instamojo.com/api/1.1/');
                        $payid = $_GET["payment_request_id"];
                        try{ 
                            $response = $api->paymentRequestStatus($payid);
                            ?>
                <div class="content">
                    <h1>Payment Success !</h1>
                    <p>Hi, G.Ramkumar,<br>
                        Thank You ! Your Payment ID : <b><?php echo $response['payments'][0]['payment_id']?></b> and Payment Email <b><?php echo $response['payments'][0]['buyer_email']?></b>
                        Please check your email we are sending payment recipt<br>
                        </p>
                        <?php }catch (Exception $e) {
                                print_r('Error: '. $e->getMessage());
                        }?>
                            
                    <a href="index.php">Go to Home</a>
                    <p class="footer">
                        <font style="color:green">&copy; <?php echo date("Y")?>The Sparks Foundation ||</font>
                        <font style="color:red"> Developed by Ramkumar</font>
                    </p>
                </div>
            </div>
        </div>
    </div>    
</div>
<br>
<br>
</body>
</html>