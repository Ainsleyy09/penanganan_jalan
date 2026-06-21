<?php

namespace App\Services;

use App\Models\Segment;

class AprioriService
{
    public function process()
    {
         $output = shell_exec(
        "python3 "
        . base_path('python/apriori.py')
        . " 2>&1"
    );

    dd($output);
    }
}
