<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\User;

class CompanySeeder extends Seeder
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
        DB::table('companies')->insert([
           'user_id'=>User::all()->random()->id,
           'cname'=>$name=$faker->company(),
           'slug'=>$faker->slug(),
           'address'=>$faker->address(),
           'phone'=>$faker->phoneNumber(),
           'website'=>$faker->domainName(),
           'logo'=>'photo/logo.png',
           'cover_photo'=>'cover_photo/cover_photo1.jpeg',
           'slogan'=>'learn-earn and grow',
           'description'=>$faker->paragraph(rand(2,10)),
        ]);
        }
    }
}
