<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'テスト',
            'email' => 'test@example.com',
            'password' => Hash::make("test"),
        ]);
    }
}
