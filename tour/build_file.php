<?php

$prefix = '04';
$range = range(1, 26);

var_dump($range);
echo PHP_EOL;
foreach ($range as $key => $value) {
    $len = strlen($value);
    if ($len == 1) {
      $filename = $prefix.'.0'.$value;
      $lastname = $prefix.'.0'.($value-1);
      $nextname = $prefix.'.0'.($value+1);
    } else {
      $filename = $prefix.'.'.$value;
      $lastname = $prefix.'.'.($value-1);
      $nextname = $prefix.'.'.($value+1);
    }
    echo $filename.PHP_EOL;

    $content = "## $filename （）


## 链接
* [目录](https://github.com/gnefiy/go-zh/blob/master/tour/directory.md)
* 上一节：[$lastname （）](https://github.com/gnefiy/go-zh/blob/master/tour/$lastname.md)
* 下一节：[$nextname （）](https://github.com/gnefiy/go-zh/blob/master/tour/$nextname.md)
";

      file_put_contents($filename.'.md', $content);

}
