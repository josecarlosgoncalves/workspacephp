<?php

    $itleSite = "My Agenda 2024";

  
?>
<!DOCTYPE html>
<html lang="pt-pt">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<script src="https://cdn.tailwindcss.com"></script>
		<title>My Agenda</title>
		<link
			rel="stylesheet"
			href="../css/style.css"
		/>
		
	</head>
	<body>
        <div class="title">
            <h1 class="text-3xl "> <?php  echo $itleSite; ?> </h1>


            <div>
            <ul>
                <li><a href="register.php">Registo</a></li>
                <li><a href="./login.php">Login</a></li>
            </ul>
            </div>
           
        
        </div>
       
	
	</body>
</html>
