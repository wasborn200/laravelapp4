<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
    $table->bigIncrements('id');
    $table->integer('thread_id');
    $table->string('message');
    $table->timestamps();
     */
    public function run()
    {
        $param = [
            'thread_id' => '1',
            'user_id' => '2',
            'message' => 'ff11の暗黒騎士のようにかっこいいので期待しています。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('replies')->insert($param);

        $param = [
            'thread_id' => '1',
            'user_id' => '3',
            'message' => 'デスサイズが使いたい！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('replies')->insert($param);

        $param = [
            'thread_id' => '1',
            'user_id' => '1',
            'message' => '斬撃音もかっこいいものにしてほしいですね。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('replies')->insert($param);
    }
}
