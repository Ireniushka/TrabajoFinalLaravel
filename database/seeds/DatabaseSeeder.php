<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Enterprise::class, 5)->create();
        factory(\App\Cycle::class, 2)->create();
        factory(\App\User::class)->create(['email' => 'admin@damin.com', 'password'=>bcrypt('123456'), 'type'=>'ad']);
        factory(\App\User::class, 5)->create();
        factory(\App\Task::class, 10)->create();
        factory(\App\Belong::class, 5)->create();
        factory(\App\Study::class, 5)->create();
        factory(\App\Worksheet::class, 10)->create();
        factory(\App\Task_done::class, 10)->create();
        factory(\App\Assistance::class, 2)->create();
        factory(\App\Module::class, 10)->create();
        factory(\App\Ra::class, 10)->create();
        factory(\App\Ce::class, 10)->create();
        factory(\App\Tracing::class, 10)->create();
        factory(\App\Visit::class, 5)->create();
    }
}
