<?php

namespace App\Services;

use App\Models\Segment;

class AprioriService
{
    public function process()
    {
        $output = shell_exec("python python/apriori.py");

        return $output;
    }
}
