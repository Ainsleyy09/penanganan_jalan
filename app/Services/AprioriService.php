<?php

namespace App\Services;

use App\Models\Segment;

class AprioriService
{
    shell_exec(
            "python "
                . base_path('python/apriori.py')
                . " 2>&1"
        );

        return true;
    }
}
