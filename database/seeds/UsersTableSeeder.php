<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'email' => 'test1@domain.com',
            'name' => 'John Doe',
            'password' => \Hash::make('helloworld')
        ]);

        User::firstOrCreate([
            'email' => 'test2@domain.com',
            'name' => 'Jane Doe',
            'password' => \Hash::make('helloworld')
        ]);

        User::firstOrCreate([
            'email' => 'test3@domain.com',
            'name' => 'Bob Doe',
            'password' => \Hash::make('helloworld')
        ]);
    }
}
