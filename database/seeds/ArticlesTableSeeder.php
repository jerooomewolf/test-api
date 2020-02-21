<?php

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('articles')->insert([
            'user_id' => User::find(1)->id,
            'subject' => Str::random(10),
            'content' => $faker->text,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
