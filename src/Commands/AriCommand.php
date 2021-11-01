<?php

namespace Soap\Ari\Commands;

use Illuminate\Console\Command;

class AriCommand extends Command
{
    public $signature = 'ari';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
