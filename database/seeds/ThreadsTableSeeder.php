<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
    $table->bigIncrements('id');
    $table->integer('user_id');
    $table->string('title');
    $table->string('message');
    $table->timestamps();
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'title' => 'リーパーについて',
            'message' => '新ジョブのリーパーについて語るスレです。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('threads')->insert($param);

        $param = [
            'user_id' => '1',
            'title' => '賢者について',
            'message' => '新ジョブの賢者について語るスレです。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('threads')->insert($param);

        $param = [
            'user_id' => '1',
            'title' => '黒魔道士の蘇生について',
            'message' => 'キャスターの中で黒魔道士だけ蘇生がないことで生じるデメリットについて語ります。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('threads')->insert($param);
    }
}
