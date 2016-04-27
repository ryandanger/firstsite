<html>
	<head>
		<title>service status</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body style="background-color:white;">
	<header class="cf">
<nav>
    <ul>
        <li id="login">
            <a id="login-trigger" href="#">
                Log in <span>&#x25BC;</span>
            </a>
            <div id="login-content">
                <form>
                    <fieldset id="inputs">
                        <input id="username" type="email" name="Email" placeholder="Your email address" required>   
                        <input id="password" type="password" name="Password" placeholder="Password" required>
                    </fieldset>
                    <fieldset id="actions">
                        <input type="submit" id="submit" value="Log in">
                        <label><input type="checkbox" checked="checked"> Keep me signed in</label>
                    </fieldset>
                </form>
            </div>                     
        </li>
        <li id="signup">
            <a href="">Sign up FREE</a>
        </li>
    </ul>
</nav>
</header>
<script src="js/index.js"></script>
	<div style="text-align:left">
		<h1 style="color:black;">The Danger Space</h1>
		<h2 style="color:black;"> Service Status</h2>
		<br>
		<p style="color:black;"> Plex: <?php

if (!$socket = @fsockopen("180.181.205.249", 32400, $errno, $errstr, 30))
{
  echo "<font color='red'><strong>Offline!</strong></font>";
}
   else 
    {
  echo "<font color='green'><strong>Online!</strong></font>";

  fclose($socket);
}

?> </p>
		<p style="color:black;"> SickRage: <?php

if (!$socket = @fsockopen("180.181.205.249", 8081, $errno, $errstr, 30))
{
  echo "<font color='red'><strong>Offline!</strong></font>";
}
   else 
    {
  echo "<font color='green'><strong>Online!</strong></font>";

  fclose($socket);
}

?> </p>

		<p style="color:black;"> Minecraft: <?php

if (!$socket = @fsockopen("180.181.205.249", 25565, $errno, $errstr, 30))
{
  echo "<font color='red'><strong>Offline!</strong></font>";
}
   else 
    {
  echo "<font color='green'><strong>Online!</strong></font>";

  fclose($socket);
}

?> </p>

	</body>

</html>
