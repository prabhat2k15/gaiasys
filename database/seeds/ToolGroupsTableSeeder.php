<?php

use Illuminate\Database\Seeder;

class ToolGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tool_groups')->insert([
        [
            'name' => Str::random(10),
        ],
        [
            'name' => Str::random(10),
        ]
        ]);
    }
}
