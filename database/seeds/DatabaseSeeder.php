<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ToolGroupsTableSeeder::class);
        $this->call(ToolsTableSeeder::class);
        $this->call(ToolGroupUserTableSeeder::class);
    }
}
