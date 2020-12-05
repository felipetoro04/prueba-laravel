<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $animal = [];
                        
        foreach(range(1,10) as $index){
            $animal[]= [
                'DogId'=> rand(1,20),
                'name'=> $faker->name,
                     
            ];
        }
        
        DB::table('animals')->insert($animal);
    }
}
