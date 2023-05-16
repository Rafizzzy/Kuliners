<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input['name'] = 'Admin';
        $input['email'] = 'admin@gmail.com';
        $input['password'] = Hash::make('admin123');
        $input['role'] = 'admin';
        User::create($input);
    }
}
