<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'           => 'Huggy',
            'email'          => 'huggy@huggy.com.br',
            'password'       => Hash::make('huggy2021'),
            'remember_token' => \Illuminate\Support\Str::random(50),
            'created_at'     => now(),
            'updated_at'     => now()
        ]);
    }
}
