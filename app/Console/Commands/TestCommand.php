<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     * @var string
     */
    protected $description = 'Command description';


    /**
     * Execute the console command.
     * @return void
     */
    public function handle(): void
    {

    }
}
