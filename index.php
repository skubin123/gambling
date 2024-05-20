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
	<body onload="generate()">
		<form name="Obrazec" id="Obrazec" method="post" autocomplete="off" action="game.php" >
        
        <div id="Header">
                
                <strong class="naslov">Gambling</strong>
        </div>
        <div id="wrapper">
            <div class="playerk">
                <strong>Name 1</strong></br>
                <input type="text" name="playerone" id="player1" maxlength="10" required>
            </div>
            <div class="playerk">
                <strong>Name 2</strong></br>
                <input type="text" name="playertwo" id="player2" maxlength="10" required>
            </div>
            <div class="playerk">
                <strong>Name 3</strong></br>
                <input type="text" name="playerthree" id="player3" maxlength="10" required>
            </div>
            <div class="num">
                <strong>Number of dice</strong></br>
                <select name="dNum" id="dNum">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="num">
                <strong>Number of throws</strong></br>
                <select name="rNum" id="rNum">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
            </div>
            <div class="num">
                <button type="submit" id="ideGas" ><strong>Start</strong></button>
                <input id="gumb" name="buttoun" style="display:none;">
            </div>
        </div>
        </form>
	</body>
</html>