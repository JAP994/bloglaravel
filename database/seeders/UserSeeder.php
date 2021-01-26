<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory(50)->create();

        $user = new User();
        $user->name="Jonathan";
        $user->lastName="Sánchez";
        $user->email="sanjo0@gmail.com";
        $user->password="123456";
        $user->save();

        $user1 = new User();
        $user1->name="Alex";
        $user1->lastName="Ponce";
        $user1->email="alexp09@gmail.com";
        $user1->password="1234";
        $user1->save();
    }
}
