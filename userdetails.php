<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Sparks Foundation - Payment Gateway - by Ramkumar</title>
    <link rel="icon" href="image/logo.png">
    <link rel="stylesheet" href="css/userdetails.css">
</head>
<body>
    <center>
            <form action="pay.php" method="POST" enctype="multipart/form-data">
            <div class="body">
                <h2 class="ml3">The Sparks Foundation</h2>
                <div class="container">
                    <img src="image/logo.png" alt="logo" class="logo">
                    <br>
                    <table>
                        <tr>
                            <td>Name <span class="required">*</span></td>
                            <td>
                                <input type="text" name="name" class="input" placeholder="Name" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Email <span class="required">*</span></td>
                            <td>
                                <input type="email" name="email" class="input" placeholder="email" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Phone No <span class="required">*</span></td>
                            <td>
                                <input type="text" name="phone_no" class="input" placeholder="Phone_no" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Purpose <span class="required">*</span></td>
                            <td>
                                <input type="text" name="purpose" class="input" value="Help Child" readonly>
                            </td>
                        </tr>

                        <tr>
                            <td>Amount <span class="required">*</span></td>
                            <td>
                                <input type="text" name="amount" class="input" placeholder="amount">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Donate" name="pay_btn" class="btn">
                </div>
            </form>
        </div>
    </center>
</body>
</html>
<?php include'include/footer.php'?>

<style type="text/css">
  .body{
    width: 100%;
    height: 110vh;
    background-image: url(image/gif.gif);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;

}
</style>