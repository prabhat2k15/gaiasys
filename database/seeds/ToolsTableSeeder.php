<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tools')->insert([
            [
                'tool_group_id' => rand(1,2),
                'name' => Str::random(10),
                'purchase_date' => Carbon::now(),
                'cost_price' => rand(100, 900),
            ],
            [
                'tool_group_id' => rand(1,2),
                'name' => Str::random(10),
                'purchase_date' => Carbon::now(),
                'cost_price' =>rand(100, 900),
            ]
        ]);
    }
}
