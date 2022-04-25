<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Company;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker::create();
        foreach(range(1,20) as $value){
            DB::table('jobs')->insert([
               'user_id' =>User::all()->random()->id,
               'company_id'=>Company::all()->random()->id,
               'title'=>$title=$faker->text(),
               'slug'=>$faker->slug(),
               'position'=>$faker->jobTitle(),
               'address'=>$faker->address(),
               'category-id'=>rand(1,5),
               'type'=>'fullTime',
               'status'=>rand(0,1),
               'description'=>$faker->paragraph(rand(2,10)),
               'last_date'=>$faker->dateTime(),

            ]);
        }
    }
}
