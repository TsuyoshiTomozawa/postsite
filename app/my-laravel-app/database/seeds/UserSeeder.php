<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //一般ユーザー（ログイン用)
        factory(App\User::class)
            ->create([
                'name' => 'michael',
                'email' => 'michael@example.com',
                'password' => bcrypt('testtest')
            ]);

        // 一般ユーザー
        factory(App\User::class, 50)->create();
    }
}
