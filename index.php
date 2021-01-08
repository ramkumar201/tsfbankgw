<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--   Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="image/logo.png">
    <title>The Sparks Foundation</title>
</head>
<body>
    <!-- Header Session -->
    <div class="header">
        <img src="image/logo.png" alt="logo" height="50px">
        <div class="sub-header">
            <span><a href="index.php">Home</a></span>
            <span><a href="#mission">Mission</a></span>
        </div>    
    </div> 
    <!-- Main Session -->
        <div class="hero">
           <h1 class="ml3">#No Child Hungry</h1>
           <div class="sub-title">
                <p>A third of the world'a malnourished childern live in india. Covid - 19 has created more
                hunger. Give monthly. let no child go hungry.</p>
            </div>
           <a href="userdetails.php" class="btn">Donate</a>
        </div>
        <center>
        <!-- Mission Session -->
        <section id="mission">
            <div class="row justify-content-center">
                <h1>Our Mission</h1>
                <div class="col">
                    <img src="image/food.png" class="icon">
                    <h5 class="mission-title">No Child Hungry</h5>
                    <div class="mission-text">
                        <span>A third of the world'a malnourished childern live in india. Covid - 19 has created more
                            hunger. Give monthly. let no child go hungry.</span>
                    </div>
                </div>
                <div class="col">
                    <img src="image/school.png" class="icon">
                    <h5 class="mission-title">Every Girls in School</h5>
                    <div class="mission-text">   
                        <span>Keeping girl at home, keeps them in porverty. Education girls helps them & the nation
                            prosper Give montly to send a girl to school.</span>
                    </div>
                </div>
                <div class="col">
                    <img src="image/old.png" class="icon">
                    <h5 class="mission-title">#EldersLivesMatter</h5>
                    <div class="mission-text">
                        <span>70% of our elders are alone, sick, hungry or afraid, they deserve respect & support.
                            Sponsor maontly care for the elderly</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ending Mission Session -->
    </center>
</body>
</html>
<?php include 'include/footer.php'?>
<style type="text/css">
    .hero
    {
        min-width: 10%;
        width: 100%;
        height: 100vh;
        margin-top: -50px;
        background-image: url(image/red.jpeg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>