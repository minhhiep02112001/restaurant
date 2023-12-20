<?php

namespace App\Console\Commands;

use App\Models\Game;
use App\Services\Crawler;
use App\Services\CrawlerData;
use App\Services\CrawlerDataYelp;
use Illuminate\Console\Command;

class CommandCrawlerData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:data {--function=}';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $function = $this->option('function');
        $this->$function(); 
    }

    // php artisan crawler:data --function=curl_yelp
    public function curl_yelp(){
        $_call = new CrawlerDataYelp();
        $_call->index();
        return Command::SUCCESS;
    }

     
}
