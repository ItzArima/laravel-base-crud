<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++){
            $video = new Video();
            $video->title = $faker->catchPhrase;
            $video->owner = $faker->name;
            $duration = $faker->randomFloat($nbMaxDevimals = 2, $min = 0, $max = 3);
            $int = floor($duration);
            $seconds = ($duration - $int) * 60;
            $video->duration = $int + ($seconds / 100); 
            $video->type = $faker->bs;
            $video->save();
        }
    }
}
