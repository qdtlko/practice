<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Model::unguard();

        $this->call('TagTableSeeder');

        $this->call('PostTableSeeder');

        Model::reguard();
    }
}


//class PostTableSeeder extends Seeder
//{
//    public function run()
//    {
//        App\Post::truncate();
//        factory(App\Post::class, 20)->create();
//    }
//}
