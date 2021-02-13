<?php

namespace App\Console;

use App\Console\Commands\LembreteCron;
use App\Models\Lembretes;
use App\Notifications\Lembrete;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Notifications\Notifiable;

class Kernel extends ConsoleKernel
{
    use Notifiable;
    private $email;
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        LembreteCron::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //$schedule->command('inspire')
        //          ->hourly();
        //$schedule->command('lembrete:cron')->everyMinute();
        /*$schedule->call(function(){
           Lembretes::create(['nome' => 'teste', 'email' => 'luandiego7@gmail.com', 'data' => '2021-02-14 10:00:00', 'repeticao' => 2]);
        })->everyMinute();*/
        $lembretes = Lembretes::all();
        foreach($lembretes as $lembrete){
            switch($lembrete->repeticao){
                case 2:{
                    $schedule->command('lembrete:cron',[$lembrete->nome, $lembrete->email])->daily();
                    break;
                }
                case 3:{
                    $schedule->command('lembrete:cron',[$lembrete->nome, $lembrete->email])->hourly();
                }

            }
        }
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
