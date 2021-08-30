<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'info@nikolina.com',
            'password' => bcrypt('nikolina'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Author',
            'email' => 'author@blog.com',
            'password' => bcrypt('rootauthor'),
        ]);
    }
}
