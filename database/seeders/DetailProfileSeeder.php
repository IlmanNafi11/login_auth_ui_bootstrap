<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("detail_profiles")->insert([
            'address' => 'sragen',
            'nomor_tlp'=> fake()->phoneNumber(),
            'ttl' => fake()->date(),
            'foto'=> fake()->imageUrl(),
            'user_id' => User::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at'=> now(),
        ]);
    }
}
