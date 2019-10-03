<!DOCTYPE html>
    <html>
        <head>
            <title>Sign up page</title>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <link rel="stylesheet" href="styles/signup.css">
        </head>

        <body style="backgrond-image:url('background.jpg');">
        <nav>
            <div class="title-bar">
                <h1>Manage Waste Food</h1>
            </div>

        </nav>
             <div class="brand-image">
			<img src="images/background.jpg">

	     </div>

            <div class=form>
                <div class="head"><p>Sign Up</p></div>
                <form action="includes/register.inc.php" method="POST" >
                    <div class="head"><p></p></div>
                    <input type="text" name="fname" placeholder="First Name..." required><br>
                    <input type="text" name="oname" placeholder="Other Name..." required><br>
                    <input type="email" name="email" placeholder="Email .." required><br>
                    <input type="number" name="phone" placeholder="Phone e.g 07..." required><br>
		    <span class="user-rank-border">
		    <span><input type="radio" name="rank" placeholder="Hotel Manager"value="Hotel Manager"checked>Hotel Manager</span>
		    <span><input type="radio" name="rank" placeholder="N.G.O"value="N.G.O"checked>N.G.O</span>
		    </span>
                    <input type="password" name="pass1" placeholder="Password.." required><br>
                    <input type="password" name="pass2" placeholder="Confirm Password..." required><br>
                    <input type="submit" name="mySubmit"><br>
                   
                    <a id="login-link" href="anindo(login).php">Sign In</a>
                </form>
            </div>
        </body>
    </html>
