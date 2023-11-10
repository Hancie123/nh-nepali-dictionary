<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Hancie Phago',
            'email' => 'hanciewanemphago@gmail.com',
            'email_verified_at' => Now(),
            'password' => Hash::make('hienih720'),
            'status' => 'admin'

        ]);
        $url = asset('assets/img/hancie.jpg');
        $user->addMediaFromUrl($url)->toMediaCollection('profile_image');
    }
}
