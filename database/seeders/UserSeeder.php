<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'Andi',
            'email' => 'test@example.com',
            'role' => 'admin',
            'password' => '123'
        ]);
    }
}