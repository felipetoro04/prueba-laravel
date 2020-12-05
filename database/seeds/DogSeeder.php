<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $dog = [];
                        
        foreach(range(1,20) as $index){
            $dog[]= [                   
                'name'=> "Dog $index",
                'age'=> $faker->randomDigitNot(1,15),
                                     
            ];
        }
        
        DB::table('dog')->insert($dog);
    }
}