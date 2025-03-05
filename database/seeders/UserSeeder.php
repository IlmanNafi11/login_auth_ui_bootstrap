<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use function Symfony\Component\Clock\now;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'ilmannafi',
            'email'=> 'ilmannafi@gmail.com',
            'password'=> bcrypt('password'),
            'username'=> 'ilman',
            'email_verified_at'=> now(),
            'remember_token'=> Str::random(10),
        ]);
    }
}
