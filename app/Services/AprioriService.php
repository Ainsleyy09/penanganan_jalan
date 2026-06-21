<?php

namespace App\Services;

use App\Models\Segment;

class AprioriService
{
public function process()
{
    set_time_limit(300);

    $output = shell_exec(
        "python " .
        base_path('python/apriori.py') .
        " 2>&1"
    );

    file_put_contents(
        storage_path('logs/apriori.log'),
        $output
    );

    return true;
}
}
