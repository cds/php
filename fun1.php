<!DOCTYPE html>
<html>
<head>
	<title>function</title>
</head>
<body>
	<?php
	
	function add($a=0,$b=0){
		$c= $a +$b;
		return "$c";
	}
	function sub($p=0,$q=0)
	{
		$r=$p-$q;
		return"$r";
	}
	function Mult($a=1,$b=1)
	{
		$c=$a*$b;
		return "$c";
	}
	function div($a=1,$b=1)
	{
		$c=$a/$b;
		return "$c";

		# code...
	}
	echo "5+10=".add(5,10)."<br>";
	echo "0+0=".add()."<br>";
	echo "1+0=".add(1)."<br>";
	echo "3+0=".add(3)."<br>";
	echo "2-2=".sub(2,2)."<br>";
	echo "3-0=".sub(3)."<BR>";
	echo "2x2=".mult(2,2)."<br>";
	echo "2x0=".mult(2)."<br>";
	echo "2/2=".div(2,2)."<br>";
	echo "2/1=".div(2)."<br>";
	?>	

</body>
</html>