<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin123@gmail.com',
            'age' => '21',
            'phone_number' => '081645364532',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@kawankoding.id',
            'age' => '22',
            'phone_number' => '081485367382',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');
    }
}
