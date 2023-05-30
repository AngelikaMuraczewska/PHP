<?php
$winner = 'n';
$box = array ('','','','','','','','','');
if (isset ($_POST ['submitbtn'])){
	$box[0] = $_POST['box0'];
	$box[1] = $_POST['box1'];
	$box[2] = $_POST['box2'];
	$box[3] = $_POST['box3'];
	$box[4] = $_POST['box4'];
	$box[5] = $_POST['box5'];
	$box[6] = $_POST['box6'];
	$box[7] = $_POST['box7'];
	$box[8] = $_POST['box8'];
	
	if (($box[0] == 'x' && $box[1] == 'x' && $box[2] == 'x' ) ||
		($box[3] == 'x' && $box[4] == 'x' && $box[5] == 'x' ) ||
		($box[6] == 'x' && $box[7] == 'x' && $box[8] == 'x' ) ||
		($box[0] == 'x' && $box[3] == 'x' && $box[6] == 'x' ) ||
		($box[2] == 'x' && $box[6] == 'x' && $box[8] == 'x' ) ||
		($box[2] == 'x' && $box[4] == 'x' && $box[6] == 'x' ) ||
		($box[1] == 'x' && $box[4] == 'x' && $box[7] == 'x' ) ||
		($box[2] == 'x' && $box[5] == 'x' && $box[8] == 'x' ) ||
		($box[0] == 'x' && $box[4] == 'x' && $box[8] == 'x' )) {
		
			$winner = 'x';
			print ("</br></br><strong>X WYGRAŁ GRĘ</strong></br>");
		}
	$blank = 0;
	for ($i = 0; $i <=8; $i++) {
		if ($box[$i] == '') {
		$blank = 1;
		}
	}
	if ($blank == 1 && $winner == 'n') {
		$i = rand() % 8;
		while ($box[$i]!= '') {
		    $i = rand() % 8;
		}
		$box[$i] = 'o';
		if (($box[0] == 'o' && $box[1] == 'o' && $box[2] == 'o' ) ||
			($box[3] == 'o' && $box[4] == 'o' && $box[5] == 'o' ) ||
			($box[6] == 'o' && $box[7] == 'o' && $box[8] == 'o' ) ||
			($box[0] == 'o' && $box[3] == 'o' && $box[6] == 'o' ) ||
			($box[2] == 'o' && $box[6] == 'o' && $box[8] == 'o' ) ||
			($box[2] == 'o' && $box[4] == 'o' && $box[6] == 'o' ) ||
			($box[1] == 'o' && $box[4] == 'o' && $box[7] == 'o' ) ||
			($box[2] == 'o' && $box[5] == 'o' && $box[8] == 'o' ) ||
			($box[0] == 'o' && $box[4] == 'o' && $box[8] == 'o' )) {
		
			$winner = 'o';
			print ("</br></br><strong>O WYGRAŁ GRĘ</strong></br>");
		}
	}else if ($winner == 'n'){
		$winner = 't';
		print("</br>TIED GAME");
	}
}
?>

<html>
	<head>
	<title>Kółko i krzyżyk </title>
	<style type = "text/css">
		#box {
			background-color: #c3ccb5;
			border: 3px solid #008000;
			width: 100px;
			height: 100px;
			font-size: 70px;
			text-align: center;
            orientation: vertical;
		}
		
		#go{
			width: 150px;
			height: 50px;
			background-color: #cddc39;
			font-size: 20px;
		}
		
		#again {
			width: 200px;
			height: 50px;
			background-color: #cddc39;
			font-size: 20px;
		}
	</style>	
	</head>	
	
	<body bgcolor = "green" align = "center">
		<form name = "tictactoe" action = "index.php" method = "post">
			<?php
			for ($i=0; $i<=8; $i++) {
				printf ('<input type = "text" name = "box%s" value = "%s" id = "box">', $i, $box[$i]);
				if ($i==2 || $i==5 || $i==8){
					print('</br>');
				}
			}
			if ($winner == 'n'){
				print ('</br> ');
                print ('</br> <input type = "submit" name = "submitbtn" value = "GRAJ" id = "go">');
			}
			else{
				print ('</br> ');
                print ('</br> <input type = "button" name = "newgamebtn" value = "ZAGRAJ PONOWNIE" id = "again" onclick="window.location.href=\'index.php\'">');
			}
			?>
		</form>
	
	</body>

</html>