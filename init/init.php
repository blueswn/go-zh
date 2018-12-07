<?php

$lessons = file_get_contents('./lesson.js');
$lessons = json_decode($lessons, true);
$path = '../test';
if (!is_dir($path)) {
    mkdir($path);
}

$directories = array_keys($lessons);
foreach ($directories as $dir) {
    if (!is_dir("$path/$dir")) {
        mkdir("$path/$dir");
    }

    $lesson = $lessons[$dir];
    $title = $lesson['Title'];
    $description = $lesson['Description'];
    $pages = $lesson['Pages'];

    foreach ($pages as $k=>$page) {
        $pageTitle = $page['Title'];
        $pageContent = $page['Content'];
        $index = $k+1;
        if ($index < 10) {
            $index = "0$index";
        }

        $filename = "$index.{$pageTitle}.md";
        file_put_contents("$path/$dir/$filename", $pageContent);
    }
}


//var_dump($lessons['basics']['Pages'][0], $directories);