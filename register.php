<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>FoodDoc</title>
	<meta http-equiv="Content-Type" content="text/html" charset=utf-8/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/header.css">
	
	<style>
		div div {
			margin: auto;
		}
		
	</style>
</head>
    
<body background="images/bg.png">

	<div class="container">
		<div id ="logo" class="row">
			<div class="col-xs-12" id="header">
                <img src="images/logo.png">
				<hr>
			</div>
		</div>
        
        <h2 style="text-align:center">Registration</h2>
        
    <form name="form" method="post" action="register_finish.php">
        
        <div class="contentBox row">
            <div class="form-group col-md-12 row">

                    <!--mobile / tablet view-->
                <div class="visible-sm visible-xs">
                    <label class="col-xs-12" for="username">Username:</label>
                </div>

                    <!--desktop view-->
                <div class="hidden-sm hidden-xs">
                    <label style="text-align:right" class="col-md-4" for="username">Username:</label>
                </div>

                <div class="col-md-6 col-xs-12">
                    <input type="text" class="form-control" id="user" name="user" placeholder="Used for login"></div>
            </div>
            
            <div class="form-group col-md-12 row">

                    <!--mobile / tablet view-->
                <div class="visible-sm visible-xs">
                    <label class="col-xs-12" for="password">Password:</label>
                </div>

                    <!--desktop view-->
                <div class="hidden-sm hidden-xs">
                    <label style="text-align:right" class="col-md-4" for="password">Password:</label>
                </div>

                <div class="col-md-6 col-xs-12">
                    <input type="password" class="form-control" id="pw" name="pw" size="20" placeholder="Setup your password"></div>
            </div>
            
            <div class="form-group col-md-12 row">

                    <!--mobile / tablet view-->
                <div class="visible-sm visible-xs">
                    <label class="col-xs-12" for="password">Comfirm Password:</label>
                </div>

                    <!--desktop view-->
                <div class="hidden-sm hidden-xs">
                    <label style="text-align:right" class="col-md-4" for="password">Confirm Password:</label>
                </div>

                <div class="col-md-6 col-xs-12">
                    <input type="password" class="form-control" id="pw2" name="pw2" placeholder="Confirm your password">
                </div>
                
            </div>
            
            <div class="form-group col-md-12 row">

                    <!--mobile / tablet view-->
                <div class="visible-sm visible-xs">
                    <label class="col-xs-12" for="name">Name:</label>
                </div>

                    <!--desktop view-->
                <div class="hidden-sm hidden-xs">
                    <label style="text-align:right" class="col-md-4" for="name">
                        Name:
                    </label>
                </div>

                <div class="col-md-6 col-xs-12">
                    <input type="text" class="form-control" id="id" name="name" placeholder="Enter your name"></div>
            </div>
            
            <div class="form-group col-md-12 row">
                
                    <!--mobile / tablet view-->
                <div class="visible-sm visible-xs">
                    <label class="col-xs-12" for="intro">Self Intro:</label>
                </div>

                    <!--desktop view-->
                <div class="hidden-sm hidden-xs">
                    <label style="text-align:right" class="col-md-4" for="intro">
                        Self Intro:
                    </label>
                </div>

                <div class="col-md-6 col-xs-12">
                    <input type="text" class="form-control" id="id" name="bio" placeholder="Introduce your self"></div>
            </div>
            
            <div class="form-group col-md-12 row">

                    <!--mobile / tablet view-->
                <div class="visible-sm visible-xs">
                    <label class="col-xs-12" for="likes">Likes:</label>
                </div>

                    <!--desktop view-->
                <div class="hidden-sm hidden-xs">
                    <label style="text-align:right" class="col-md-4" for="likes">
                        Likes:
                    </label>
                </div>

                <div class="col-md-6 col-xs-12">
                    <input type="text" class="form-control" id="likes" name="likes" placeholder="What you like"></div>
                
            </div>
            
            <div class="form-group col-md-12 row">

                    <!--mobile / tablet view-->
                <div class="visible-sm visible-xs">
                    <label class="col-xs-12" for="dislikes">Dislikes:</label>
                </div>

                    <!--desktop view-->
                <div class="hidden-sm hidden-xs">
                    <label style="text-align:right" class="col-md-4" for="dislikes">
                        Dislikes:
                    </label>
                </div>

                <div class="col-md-6 col-xs-12">
                    <input type="text" class="form-control" id="dislikes" name="dislikes" placeholder="what you dislike"></div>
                
            </div>
            
            <div class="form-group col-md-12 row">

                    <!--mobile / tablet view-->
                <div class="visible-sm visible-xs">
                    <label class="col-xs-12" for="allergies">Allergies:</label>
                </div>

                    <!--desktop view-->
                <div class="hidden-sm hidden-xs">
                    <label style="text-align:right" class="col-md-4" for="allergies">
                        Allergies:
                    </label>
                </div>

                <div class="col-md-6 col-xs-12">
                    <input type="text" class="form-control" id="allergies" name="allergies" placeholder="Some Allergies"></div>
            </div>
            
            <?php
			if (isset($_GET['error'])) {
				echo '<p class="red row col-xs-11 col-xs-offset-1">Please do not leave fields blank.</p>';
			}
			?>
		</div>
        
        <!-- buttons desktop -->
			<div class="visible-lg visible-md row">
				<div class="col-md-2 col-md-offset-3" >
					<button id = "1" type="submit" class="btn btn-block btn-primary" onclick="EntryChecking()">Submit</button>
				</div>
				<div class="col-md-2" >
					<button type="reset" value="Reset" class="btn btn-block btn-primary">Reset</button>
				</div>
				<div class="col-md-2" >
					<a href="index.php"><button type="button"  class="btn btn-block btn-primary">Cancel</button></a>
				</div>
			</div>
			<!-- mobile / tablet -->
			<div class="hidden-lg hidden-md">
				<div style="margin-top:20px" class="col-xs-8 col-xs-offset-2 row">
					<button id="2" type="submit" onclick="EntryChecking()" class="btn btn-block btn-primary">Submit</button>
				</div>
                <div style="margin-top:20px" class="col-xs-8 col-xs-offset-2 row">
					<button type="reset" value="Reset" class="btn btn-block btn-primary">Reset</button>
				</div>
				<div style="margin-top:20px" class="col-xs-8 col-xs-offset-2 row">
					<a href="index.php"><button type="button" class="btn btn-block btn-primary">Cancel</button></a>
				</div>
			</div>
		</form>
        
		<footer class="col-xs-12">
			<hr>
			<p style="text-align:center">&copy Team 26</p>
		</footer>
    </div>
</body>