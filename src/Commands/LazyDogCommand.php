<?php

namespace Eamirgh\LazyDog\Commands;

use Illuminate\Console\Command;

class LazyDogCommand extends Command
{
    public $signature = 'lazy-dog';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
