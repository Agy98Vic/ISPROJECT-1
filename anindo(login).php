<!DOCTYPE html>
    <html>
        <head>
            <title>Sign up page</title>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <link rel="stylesheet" href="styles/signup.css">
        </head>

        <!-- <body style="backgrond-image:url('background.jpg');"> -->
        <nav>
            <div class="title-bar">
                <h1>Manage Waste Food</h1>
            </div>
        </nav>
		<div class="brand-image">
			<img src="images/background.jpg">

		</div>

            <div class=form>
                <div class="head"><p>Sign In</p></div>
                <form action="includes/login.inc.php" method="POST" >
                    <div class="head"><p></p></div>
                    <input type="email" name="email" placeholder="Email .." required><br>
                    <input type="password" name="pass1" placeholder="Password.." required><br>
                    <input type="submit" name="mySubmit"><br>
                   
                    <a id="login-link" href="anindo(sign-up).php">Sign Up</a>
                </form>
            </div>
        </body>
    </html>
