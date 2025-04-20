<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory;
use Illuminate\Support\Str;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker=Factory::create();

        foreach (range(1,10) as $index){
            $name=$faker->company;
            Brand::create(
                [
                    'name'=>$name,
                    'slug'=>Str::slug($name,'-'),
                ]
                );
        }
    }
}
