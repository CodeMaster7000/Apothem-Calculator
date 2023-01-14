<?php
function polyapothem($n, $a)
{
	if ($a < 0 && $n < 0)
		return -1;
	return $a / (2 * tan((180 / $n) *
					3.1416 / 180));
}
// Enter n and a values here
$a = 9; $n = 6;
echo polyapothem($n, $a) . "\n";
?>
