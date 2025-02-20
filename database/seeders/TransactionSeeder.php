<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class transactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i=1; $i <=10; $i++) {
            DB::table('transactions')->insert([
                'user_id'=> $faker->numberBetween(1,10),
                'court_id'=> $faker->numberBetween(1,10),
                'name'=> $faker->name,
                'address'=> $faker->address,
                'phone'=>$faker->phoneNumber(),
                'date'=> $faker->date,
                'starttime'=> $faker->time,
                'endtime'=> $faker->time,
                'costume'=> $faker->boolean(),
                'shoes'=> $faker->boolean(),
                'total'=> $faker->randomNumber(6, True),
                'grandtotal'=> $faker->randomNumber(6, True),
                'paytotal'=> $faker->randomNumber(6, True),
        ]);
        }
    }
}