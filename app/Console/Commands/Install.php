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
    protected $signature = 'roadsideromeos:install';

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

        // running `touch config/settings.php`
        $this->warn('Step: Creating custom config file..');
        $result = shell_exec('touch config/settings.php');
        $myfile = fopen("config/settings.php", "w") or die("Unable to open file!");
            $txt = 
            "<?php
            use App\Models\WebsiteSetting;
            use Illuminate\Support\Facades\Storage;
            
            return [
                'title'         => WebsiteSetting::find(1)->title,
                'email'         => WebsiteSetting::find(1)->email,
                'phone'         => WebsiteSetting::find(1)->phone,
                'logo'          => Storage::url(WebsiteSetting::find(1)->logo),
                'address'       => WebsiteSetting::find(1)->address,
                'longitude'     => WebsiteSetting::find(1)->longitude,
                'latitude'      => WebsiteSetting::find(1)->latitude,
                'facebook_url'  => WebsiteSetting::find(1)->facebook_url,
                'instagram_url' => WebsiteSetting::find(1)->instagram_url,
                'twitter_url'   => WebsiteSetting::find(1)->twitter_url,
                'youtube_url'   => WebsiteSetting::find(1)->youtube_url,
            ];";
            fwrite($myfile, $txt);
            fclose($myfile);
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
