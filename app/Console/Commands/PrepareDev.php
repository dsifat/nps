<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrepareDev extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prepare:dev';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prepares Development Environment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Preparing development environemnt');

        // Migrating, then seeding
        $this->call('migrate:fresh');
        $this->call('db:seed');

        // Generating passport key
        $this->call('passport:install', [ '--force' => '']);

        // Optimizing resource
        // TODO if env == development
        $this->allClear();
        $this->call('optimize');
    }

    private function allClear()
    {
        $this->call('view:clear');
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('clear-compiled');
    }
}
