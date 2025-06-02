<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    protected $signature = 'make:admin 
                            {username : Username admin} 
                            {email : Email admin} 
                            {password : Password admin}';

    protected $description = 'Membuat akun admin baru dengan role admin';

    public function handle()
    {
        $username = $this->argument('username');
        $email = $this->argument('email');
        $password = $this->argument('password');

        if (User::where('email', $email)->exists()) {
            $this->error('Email sudah digunakan.');
            return 1;
        }

        if (User::where('username', $username)->exists()) {
            $this->error('Username sudah digunakan.');
            return 1;
        }

        $user = User::create([
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => 'admin',
        ]);

        $this->info("Admin berhasil dibuat: {$user->username} ({$user->email})");
        return 0;
    }
}
