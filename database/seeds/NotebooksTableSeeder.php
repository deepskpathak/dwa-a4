<?php

use Illuminate\Database\Seeder;

use App\Notebook;

class NotebooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notebook::insert([
            'name' => 'Random',
            'user_id' => '2',
            'created_at' => '2017-05-11 20:52:36',
            'updated_at' => '2017-05-11 20:52:36'
        ]);

        Notebook::insert([
            'name' => 'Work',
            'user_id' => '1',
            'created_at' => '2017-05-11 20:52:36',
            'updated_at' => '2017-05-11 20:52:36'
        ]);

        Notebook::insert([
            'name' => 'General',
            'user_id' => '2',
            'created_at' => '2017-05-11 20:52:36',
            'updated_at' => '2017-05-11 20:52:36'
        ]);

        Notebook::insert([
            'name' => 'Read Later',
            'user_id' => '3',
            'created_at' => '2017-05-11 20:52:36',
            'updated_at' => '2017-05-11 20:52:36'
        ]);

        Notebook::insert([
            'name' => 'Snippets',
            'user_id' => '1',
            'created_at' => '2017-05-11 20:52:36',
            'updated_at' => '2017-05-11 20:52:36'
        ]);
    }
}