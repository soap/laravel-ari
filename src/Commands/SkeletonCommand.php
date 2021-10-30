<?php

namespace Soap\Ami\Commands;

use Illuminate\Console\Command;

class AmiCommand extends Command
{
    public $signature = 'laravel-ami';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
