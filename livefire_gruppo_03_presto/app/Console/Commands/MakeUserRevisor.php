<?php

namespace App\Console\Commands;



use Illuminate\Console\Command;
use Illuminate\Foundation\Auth\User;


class MakeUserRevisor extends Command
{
 
    protected $signature = 'presto:makeUserRevisor {email}';

 
    protected $description = 'Rendi un utente revisore';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $user = User::where('email', $this->argument('email'))->first();
        if (!$user) {
            $this->error('Utente non trovato');
            return;
        }

        $user->is_revisor = true;
        $user->save();
        $this->info("L'utente {$user->name} è ora revisore.");
    }
}
