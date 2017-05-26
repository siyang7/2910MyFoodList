<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
unset($_SESSION['accNo']);
session_destroy();
echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.inc"); ?>
        <link rel="stylesheet" href="css/footerpush.css" />
    </head>
    <body>
		<?php include("include/header.inc"); ?>
  
        <main class="container">
            <div class="text-center contentBox">
                <h2> Logged out</h2>
                <h4> You'll be redirected to login</h4>
            </div>
        </main>
    </body>

    <?php include("include/footer.inc") ?>

</html>
