<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
    $table->bigIncrements('id');
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->rememberToken();
    $table->timestamps();
     */
    public function run()
    {
        $param = [
            'name' => 'test1',
            'email' => 'test1@gmail.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'test3',
            'email' => 'test3@gmail.com',
            'password' => Hash::make('password'),
        ];
        DB::table('users')->insert($param);
    }
}
