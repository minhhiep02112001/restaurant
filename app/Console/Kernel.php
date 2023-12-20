<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('sitemap:create --function=sitemapPost')->everySixHours();
        // $schedule->command('google_search:index --function=index_google')->daily();
        // $schedule->command('google_search:index --function=index_bing')->daily();
        // $schedule->command('sitemap:create --function=sitemap')->daily();
        $schedule->timezone('Asia/Ho_Chi_Minh')->command('crawler:data --function=games')->dailyAt('12:00');
        $schedule->timezone('Asia/Ho_Chi_Minh')->command('crawler:data --function=version')->everySixHours(); 
 
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
