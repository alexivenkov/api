<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'alex',
            'email' => 'alex@api.com',
            'password' => bcrypt('root'),
            'api_token' => str_random(60)
        ]);

        factory(App\Models\User::class, 49)->create();
    }
}
