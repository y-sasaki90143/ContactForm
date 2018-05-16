<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
        [
            'name' => 'てすと',
            'mail_address' => 'test@test.test',
            'title' => 'てすと',
            'content' => 'てすと'
        ],
        [
            'name' => 'てすと',
            'mail_address' => 'test@test.test',
            'title' => 'てすと',
            'content' => 'てすと'
        ],
        [
            'name' => 'てすと',
            'mail_address' => 'test@test.test',
            'title' => 'てすと',
            'content' => 'てすと'
        ]
        ]);
    }
}
