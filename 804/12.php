<!DOCTYPE html>
<html>
<body>
<?php
$file = '11.htm';
if (file_exists($file)) {
	$Out_Template = file_get_contents($file);
} else {
	$Out_Template = '<p>No file found.</p>';
}
$array_1 = ["fruit" => "Orange", "color" => "Orange"];
$Out_Template = Template($array_1, $Out_Template);

$array_1 = ["number" => 123, "mullah" => 99.99];
$Out_Template = Template($array_1, $Out_Template);
echo $Out_Template;
echo '<pre>';
echo var_dump($array_1);
echo '</pre>';

function Template($array, $output)
{
	foreach ($array as $key => $val) {
		$replace = '{' . $key . '}';
		$output = str_replace($replace, $val, $output);
	}
	return $output;
}
?>
</body>
</html>
<p>
Reference: <br>
https://www.w3schools.com/php/showphp.asp?filename=demo_array_multi
</p>