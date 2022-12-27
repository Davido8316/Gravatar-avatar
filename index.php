<?php
    if( isset($_POST['email']) )
    {
        $email = $_POST['email'];
        $default = "";
        $size = 40;
    
        $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Gravatar Grabber</title>
    </head>
    <body>
        <h1>Get your Gravatar Avatar by entering your Email address:</h1>
        <br>
        <div class="container">
            <form action="index.php" method="post">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email">
                <button type="submit">Absenden</button>
            </form>
        </div>
        <?php 
            if( isset($_POST['email']) )
            {
                ?>
        <br>
        <h2>Gravatar Avatar from "<?=$email?>":</h2>
        <img src="<?php echo $grav_url; ?>" alt="" />
        <?php
            }
            ?>
        <footer class="pt-5 my-5 text-muted border-top">
            © <?=date("Y")?> · Created by <a href="https://github.com/Davido8316" target="_blank" rel="noopener noreferrer">Davido8316</a> 
        </footer>
    </body>
</html>