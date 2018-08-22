<?php
require '/Library/WebServer/Documents/zvendor/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$file='11.htm';
$tpl = file_get_contents($file);
$m = new Mustache_Engine;
$array_1 = ["planet" => "World"];
$array_2 = ["menu" => [['name' => "<a href=''>resque</a>" ],['name' => "hub"],['name' => "rip" ]]];
echo $m->render('Hello, {{planet}}!', $array_1);
echo $m->render('<ul>{{#menu}}<li>{{{name}}}</li>{{/menu}}</ul>',$array_2 );
echo $m->render($tpl,$array_2 );
?>
<p>
Reference:<br>
https://github.com/bobthecow/mustache.php/wiki/Mustache-Tags
</p>