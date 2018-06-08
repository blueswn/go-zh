<?php

$list = scandir('../tour/');

$titles = [];
foreach ($list as $filename) {
    echo "$filename\n";
    if (substr($filename, 0,2) == '03') {
      $content = file_get_contents('./'.$filename);
      $contents = explode(PHP_EOL, $content);
      $title = str_replace('## ', '  * [', $contents[0]);
      $title = $title.'](https://github.com/gnefiy/go-zh/blob/master/tour/'.$filename.')';
      $titles[] = $title;

    }
}

$titlesStr = implode(PHP_EOL, $titles);
echo $titlesStr;
