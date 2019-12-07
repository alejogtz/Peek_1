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
        // # Opcion 1
        for ($i = 0; $i < 100; $i++) {

            DB::table('users')->insert([
                'username' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => bcrypt('password'),
            ]);

            /*factory(App\Models\User::class, 50)->create()->each(function ($user) {
            $user->followers()->save(factory(App\Models\Follower::class)->make());  
            });*/
        }
    }
}
