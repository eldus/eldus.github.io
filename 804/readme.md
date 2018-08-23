## Learn PHP Templating

Test only at https://io.github.eldus.com/804

What are PHP’s strengths? Wonderfully diverse built-in functionality that is designed for web use. Integrates nicely with SQL servers. Fully object oriented. Lots of PHP web API’s available that further extend what can be done. Very fast.

What are PHP’s weaknesses? The syntax is awful.

Templating with Mustache
* {{ name }}
* {{{ html tags }}}

Handling PHP Arrays...
instead of this
```
$c=4;
$i=1;
$myarray = array();
while($i <= $c):
    array_push($myarray, array('key' => 'value'));
    $i++;
endwhile;
echo '<pre><code>';
var_dump($myarray);
echo '</code></pre>';
```
use the shorthand function:
```
$myarray = array();
for($i=0;$i<4;$i++){
  $myarray["item"] = "1 items";
}
```
another example:
```
for($i=1; $i < 10; $i++) {
    $option[$i] = $i;
}
```

https://github.com/bobthecow/mustache.php/wiki/Mustache-Tags

Reference:
