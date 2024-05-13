<?php
        session_start();

        $_SESSION["p1Score"];
        $_SESSION["p2Score"];
        $_SESSION["p3Score"];
        $_SESSION["p1"];
        $_SESSION["p2"];
        $_SESSION["p3"];
        $_SESSION["diceNum"];
        $_SESSION["roundNum"];
        $_SESSION["roundN"];
        


        $max=$_SESSION["p1Score"];

        for($x=0;$x<3;$x++){
            if($max<$_SESSION["p2Score"])
                $max=$_SESSION["p2Score"];
            else if($max<$_SESSION["p3Score"]){
                $max=$_SESSION["p3Score"];
            }
        }
?>

<!DOCTYPE html>
<html lang="sl">
	<head>
		<title>	
        Gambling
		</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/Style.css">
		<link rel="shortcut icon" href="images/Grayicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
        

	</head>
	<body onload="redirTimer()">
		<form name="Obrazec" id="Obrazec" method="post" autocomplete="off" action="game.php">
        
        <div id="Header">
                
                <strong class="naslov">Gambling</strong>
        </div>
        <div id="wrapper">
            <div class="playerk">
                <strong><?php if($max==$_SESSION["p1Score"]){echo 'You win!';} ?></strong></br>
                <strong class="imena"><?php echo $_SESSION["p1"];  ?></strong></br>
                <strong class="imena"><?php echo $_SESSION["p1Score"];  ?></strong></br>
            </div>
            <div class="playerk">
                <strong><?php if($max==$_SESSION["p2Score"]){echo 'You win!';} ?></strong></br>
                <strong class="imena"><?php echo $_SESSION["p2"];  ?></strong></br>
                <strong class="imena"><?php echo $_SESSION["p2Score"];  ?></strong></br>
            </div>
            <div class="playerk">
                <strong><?php if($max==$_SESSION["p3Score"]){echo 'You win!';} ?></strong></br>
                <strong class="imena"><?php echo $_SESSION["p3"];  ?></strong></br>
                <strong class="imena"><?php echo $_SESSION["p3Score"];  ?></strong></br>
            </div>
            <div id ="redirekt">
                <strong>Preusmerjeni boste čez<span id="time">10</span> sekund</strong>
            </div>
            
        </div>
        </form>


        <script>
        var secondsLeft = 10;
            function redirTimer(){
            setInterval(function(){
                if(secondsLeft==0){
                location.href="index.php";
            }
            else{
                document.getElementById("time").innerHTML = --secondsLeft; }
            }, 1000);
            
        }
        </script>
	</body>
</html>