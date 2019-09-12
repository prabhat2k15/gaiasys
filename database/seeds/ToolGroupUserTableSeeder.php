<?php

use Illuminate\Database\Seeder;

class ToolGroupUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tool_group_user')->insert([
            [
                'user_id' => rand(1,2),
                'tool_group_id' => rand(1,2),
            ],
            [
                'user_id' => rand(1,2),
                'tool_group_id' => rand(1,2),
            ],
        ]);
    }
}
