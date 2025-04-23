<?php

namespace Spencermalone\Repo1;

class MyFile
{
    public function __construct()
    {
        $thing = new \Spencermalone\PhpstanAutoloaderSymlinkPain\MyFile();
        echo "This should not run!";
    }
}