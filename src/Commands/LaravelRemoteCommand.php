<?php

namespace MohammadShariq\LaravelRemote\Commands;

use Illuminate\Console\Command;

class LaravelRemoteCommand extends Command
{
    public $signature = 'laravel-remote';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
