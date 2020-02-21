<?php

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        foreach (range(1, 10) as $counter) {
            sleep(1);

            DB::table('comments')->insert([
                'article_id' => 1,
                'name' => $faker->name,
                'comment' => $faker->text,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            echo "Seeding {$counter}..." . PHP_EOL;
        }
    }
}
