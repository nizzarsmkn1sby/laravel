<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i <=10; $i++) {
            DB::table('courts')->insert([
                'name' =>'Lapangan'.$faker->numberBetween(1,10),
                'court_type_id'=> $faker->numberBetween(1,10),
                'price' => $faker->numberBetween(50000, 500000),
        ]);
    }
    }
}