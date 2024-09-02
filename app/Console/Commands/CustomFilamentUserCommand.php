<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CustomFilamentUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:filament-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Filament user with custom fields';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $firstname = $this->ask('First Name');
        $lastname = $this->ask('Last Name');
        $email = $this->ask('Email');
        $password = $this->secret('Password');

        User::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info('User created successfully!');
    }
}