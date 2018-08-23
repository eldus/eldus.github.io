<?php
$tplfile = '11.htm';
$array_1 = ["fruit" => "<b>Watermelon</b>", "color" => "Red", "number" => 123, "mullah" => 99.99];
$array_2 = ["fruit" => "<b>Apple</b>", "color1" => "Gray", "number1" => 456, "mullah1" => 88.88];
$array_3 =
	["breadcrumb" =>
	[
	["breadcrumb-itemlink" => "/2338573.page", "breadcrumb-itemtitle" => "VM Hosts"],
	["breadcrumb-itemlink" => "/1524487.page", "breadcrumb-itemtitle" => "M2 ABC"],
	["breadcrumb-itemlink" => "/2339111.page", "breadcrumb-itemtitle" => "A. Android TV"]
]];
$merge = $array_1 + $array_2;
$merge = array_merge($array_1, $array_2);
//$merge = array_merge($array_1, $array_2, $array_3);
$Template_Tpl = Template($tplfile, $merge);
echo $Template_Tpl;
echo var_dump($merge);
echo "<br>";
echo print_r($merge);

function Template($file, $array)
{
	if (file_exists($file)) {
		$output = file_get_contents($file);
		foreach ($array as $key => $val) {
			$replace = '{{{' . $key . '}}}';
			$output = str_replace($replace, $val, $output);
		}
		return $output;
	}
}
?>
<p>
Reference: <br>
https://secure.php.net/manual/en/language.types.array.php<br>
https://www.w3schools.com/php/showphp.asp?filename=demo_array_multi<br>
http://www.broculos.net/2008/03/how-to-make-simple-html-template-engine.html
</p>