<?php

namespace App\Service\MyService;

use Illuminate\Filesystem\Filesystem;

class ServiceHistory
{
    protected $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function divide($a, $b)
    {
        return $a / $b;

    }
}
