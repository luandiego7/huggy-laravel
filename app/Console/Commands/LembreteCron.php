<?php

namespace App\Console\Commands;

use App\Models\Lembretes;
use App\Notifications\Lembrete;
use Illuminate\Console\Command;
use Illuminate\Notifications\Notifiable;

class LembreteCron extends Command
{
    use Notifiable;
    private $email;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lembrete:cron {mensagem} {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envio de lembrete por e-mail.';

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
     * @return mixed
     */
    public function handle()
    {
      $this->email = $this->argument('email');
      $this->notify(new Lembrete($this->argument('mensagem')));

    }
}
