<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,20) as $value){
        DB::table('users')->insert([
            'name'=>$faker->name(),
            'email_verified_at'=>now(),
            'user_type'=>'seeker',
            'email'=>$faker->unique()->safeEmail,
            'password'=>$faker->password(),
            'remember_token'=>Str::random(10),
        ]);
        }
    }
}
