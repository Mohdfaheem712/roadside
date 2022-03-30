<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installing Roadside Romeos';

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
        // running `php artisan migrate`
        $this->warn('Step: Migrating Roadside Romeos tables into database (will take a while)...');
        $migrate = shell_exec('php artisan migrate');
        $this->info($migrate);

        // running `php artisan db:seed`
        $this->warn('Step: Seeding Data and Configurations into database...');
        $result = shell_exec('php artisan db:seed');
        $this->info($result);

        // running `php artisan storage:link`
        $this->warn('Step: Creating Link Storage for images and files...');
        $result = shell_exec('php artisan storage:link');
        $this->info($result);

        // running `php artisan route:cache`
        $this->warn('Step: Updating the routes cache on your server...');
        $result = shell_exec('php artisan route:cache');
        $this->info($result);

        // running `php artisan optimize`
        $this->warn('Step: Optimizing files and data...');
        $result = shell_exec('php artisan optimize');
        $this->info($result);

        // running `php artisan route:cache`
        $this->warn('Step: Clearing the routes cache on your server...');
        $result = shell_exec('php artisan route:clear');
        $this->info($result);

        $this->comment('Success: Roadside Romeos has been configured successfully.');
    }
}
