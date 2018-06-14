<?php

$list = scandir('../methods/');

foreach ($list as $filename) {
    echo "$filename\n";
    if (substr($filename, 0,2) == '04'&& (int)substr($filename, 3,2) > 2) {
      $content = file_get_contents('./'.$filename);
      $contents = explode(PHP_EOL, $content);
      $title = str_replace('## ', '  * [', $contents[0]);
      $title = $title.'](https://github.com/gnefiy/go-zh/blob/master/tour/'.$filename.')';
      $currentTitle = trim(trim($contents[0], '##'));
      $currentSubStr = (int)substr($filename, 3,2);
      if ($currentSubStr < 10) {
          $currentSubStr = '0'.$currentSubStr;
      }

//      $lastSubStr =  (int)$currentSubStr-1;
//      if ($lastSubStr < 10) {
//          $lastSubStr = '0'.$lastSubStr;
//      }
//
//      var_dump($lastSubStr);
//      $lastFilename = './04.'.$lastSubStr.'.md';
//      $lastFileContent = file_get_contents($lastFilename);
//      $r = str_replace("[04.$currentSubStr （）]", "[$currentTitle]", $lastFileContent);
//      file_put_contents($lastFilename,$r);

//        var_dump($r);

        $nextSubStr = (int)$currentSubStr+1;
        if ($nextSubStr < 10) {
            $nextSubStr = '0'.$nextSubStr;
        }
        $nextFilename = './04.'.$nextSubStr.'.md';
        $nextFileContent = file_get_contents($nextFilename);
        $r1 = str_replace("[04.$currentSubStr （）]", "[$currentTitle]", $nextFileContent);
        file_put_contents($nextFilename,$r1);
        var_dump($r1);

    }
}

$titlesStr = implode(PHP_EOL, $titles);
echo $titlesStr;


