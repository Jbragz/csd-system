<?php

session_start();

if (!isset($_SESSION['user_name']) || !isset($_SESSION['user_id'])) {
    header('Location: /CSD%20System/landing/Register/SignIn/signin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CSD Faculty</title>
  </head>

    

    <body>
    <div class="container">
		<div class="row">
			<div class="tree">
				<ul>
					<li> <a href="#"><img src="images/1.jpeg"><span>Professor, MSCS</span></a>  
						<ul>
							<li><a href="#"><img src="images/2.jpeg"><span>Professor 1</span></a></li>
							<li><a href="#"><img src="images/2.jpeg"><span>Professor 2</span></a></li>
							<li><a href="#"><img src="images/2.jpeg"><span>Professor 3</span></a></li>
							<li><a href="#"><img src="images/2.jpeg"><span>Professor 4</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="additional-boxes">
				<ul>
					<li><a href="#"><img src="images/2.jpeg"><span>Professor 5</span></a></li>
					<li><a href="#"><img src="images/2.jpeg"><span>Professor 6</span></a></li>
					<li><a href="#"><img src="images/2.jpeg"><span>Professor 7</span></a></li>
					<li><a href="#"><img src="images/2.jpeg"><span>Professor 8</span></a></li>
				</ul>
				<ul>
					<li><a href="#"><img src="images/2.jpeg"><span>Professor 9</span></a></li>
					<li><a href="#"><img src="images/2.jpeg"><span>Professor 10</span></a></li>
					<li><a href="#"><img src="images/2.jpeg"><span>Professor 11</span></a></li>
					<li><a href="#"><img src="images/2.jpeg"><span>Professor 12</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	
</body>
</html>