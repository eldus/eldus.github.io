<?php
$fruit = 'Watermelon';
$color = 'Gray';

//parse and return template
$Template_Tpl = Template('11.htm',
	array
	(
		'fruit'	=> $fruit,
		'color'	=> $color
	));

//display template
echo $Template_Tpl;
$Template_Tpl = Template('11.htm',
	array
	(
		'fruit'	=> '1',
		'color'	=> '2',
	));
//display template
echo $Template_Tpl;
$array_1 = ["fruit" => "bar","color" => "foo"];
$Template_Tpl = Template('11.htm',$array_1);

echo var_dump($array_1);
echo $Template_Tpl;

function Template($file, $array) {
	if (file_exists($file)) {
        $output = file_get_contents($file);
        echo $output;
		foreach ($array as $key => $val) {
			$replace = '{'.$key.'}';
			$output = str_replace($replace, $val, $output);
		}
		return $output;
	}
}
?>
Reference: <br>
https://secure.php.net/manual/en/language.types.array.php