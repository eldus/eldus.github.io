<?php
$fruit = 'Watermelon';
$color = 'Gray';

//parse and return template
$Template_Tpl = Template(
	'11.htm',
	array(
		'fruit' => $fruit,
		'color' => $color
	)
);
echo $Template_Tpl;

$array_1 = ["fruit" => "<b>bar</b>", "color" => "foofoo", "number" => 123, "mullah" => 99.99];
$Template_Tpl = Template('11.htm', $array_1);
echo $Template_Tpl;
echo var_dump($array_1);

function Template($file, $array)
{
	if (file_exists($file)) {
		$output = file_get_contents($file);
		foreach ($array as $key => $val) {
			$replace = '{' . $key . '}';
			$output = str_replace($replace, $val, $output);
		}
		return $output;
	}
}
?>
<p>
Reference: <br>
https://secure.php.net/manual/en/language.types.array.php<br>
http://www.broculos.net/2008/03/how-to-make-simple-html-template-engine.html
</p>