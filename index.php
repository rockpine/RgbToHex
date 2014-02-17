<?php 
/*
	将RGB转换为十六进制的颜色编码
*/
?>
<?php 
	/* 十进制与十六进制的转换 */
	function RgbToHex( $r, $g, $b ) {
		$R = str_pad(dechex( intval( $r ) ), 2, '0', STR_PAD_LEFT );
		$G = str_pad(dechex( intval( $g ) ), 2, '0', STR_PAD_LEFT );
		$B = str_pad(dechex( intval( $b ) ), 2, '0', STR_PAD_LEFT );
		return $R.$G.$B;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>RGB转换到16进制编码</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	
<body>
	<form action="rgb2h.php" method="POST">
		R:<input class="input-rgb" name="R" type="text" value="<?php if($_POST["R"]) echo $_POST["R"];?>" /> </br>
		G:<input class="input-rgb" name="G" type="text" value="<?php if($_POST["G"]) echo $_POST["G"];?>" /> </br>
		B:<input class="input-rgb" name="B" type="text" value="<?php if($_POST["B"]) echo $_POST["B"];?>" /> </br>
		<input class="button" name="sub" type="submit" value="转换" />
	</form>
<?php 
	if ( $_POST["R"] && $_POST["G"] && $_POST["B"] ) {
?>
	</br>
	HEX:<input class="hex-output" name="hex" type="text" value="#<?php echo $hex=RgbToHex($_POST["R"], $_POST["G"], $_POST["B"])?>" readonly />
		<table><tr><td bgcolor="#<?php echo $hex; ?>" height="30" width="100" ></td></tr></table>
<?php
	}
?>
		

</body>

</html>
