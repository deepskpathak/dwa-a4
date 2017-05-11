<?php

use Illuminate\Database\Seeder;

use App\Note;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::firstOrCreate([
            'title' => 'Quantum Theory',
            'content' => 'Quantum theory is the theoretical basis of modern physics that explains the nature and behavior of matter and energy on the atomic and subatomic level. The nature and behavior of matter and energy at that level is sometimes referred to as quantum physics and quantum mechanics.',
            'url' => NULL,
            'user_id' => '1',
            'notebook_id' => '2',
            'created_at' => '2017-05-11 20:51:54',
            'updated_at' => '2017-05-11 20:51:54'
        ]);

        Note::firstOrCreate([
            'title' => 'Bootstrap Panels',
            'content' => '<div class="panel panel-default"><div class="panel-heading">Panel Heading</div><div class="panel-body">Panel Content</div></div>',
            'url' => 'https://www.w3schools.com/bootstrap/bootstrap_panels.asp',
            'user_id' => '1',
            'notebook_id' => '5',
            'created_at' => '2017-05-11 20:53:52',
            'updated_at' => '2017-05-11 20:53:52'
        ]);

        Note::firstOrCreate([
            'title' => 'Peter Principle',
            'content' => 'The Peter principle is a concept in management theory formulated by Laurence J. Peter and published in 1969. It states that the selection of a candidate for a position is based on the his performance in their current role, rather than on abilities relevant to the intended role . Thus, employees only stop being promoted once they can no longer perform effectively, and "managers rise to the level of their incompetence"',
            'url' => NULL,
            'user_id' => '2',
            'notebook_id' => '1',
            'created_at' => '2017-05-11 20:54:48',
            'updated_at' => '2017-05-11 20:54:52'
        ]);

        Note::firstOrCreate([
            'title' => 'Laravel Migrations',
            'content' => 'Migrations are like version control for your database, allowing your team to easily modify and share the application\'s database schema. Migrations are typically paired with Laravel\'s schema builder to easily build your application\'s database schema. If you have ever had to tell a teammate to manually add a column to their local database schema, you\'ve faced the problem that database migrations solve.',
            'url' => 'https://laravel.com/docs/5.4/migrations',
            'user_id' => '2',
            'notebook_id' => '3',
            'created_at' => '2017-05-11 20:54:48',
            'updated_at' => '2017-05-11 20:54:52'
        ]);

        Note::firstOrCreate([
            'title' => 'BASIC FACTS ABOUT ELEPHANTS',
            'content' => ' Increasing conflict with human populations taking over more and more elephant habitat and poaching for ivory are additional threats that are placing the elephant’s future at risk.',
            'url' => 'http://www.defenders.org/elephant/basic-facts',
            'user_id' => '3',
            'notebook_id' => '4',
            'created_at' => '2017-05-11 20:54:48',
            'updated_at' => '2017-05-11 20:54:52'
        ]);
    }
}
