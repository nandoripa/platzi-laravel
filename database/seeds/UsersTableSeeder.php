<?php

use Illuminate\Database\Seeder;
use PlatziLaravel\Post;
use PlatziLaravel\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Clean the users and posts tables
        User::truncate();
        Post::truncate();

        factory(User::class, 10)->create()->each(function($user) {

            $numberOfPostsToCreate = rand(1,5);
            $i = 0;

            while($i < $numberOfPostsToCreate) {

                $post = factory(Post::class)->make();
                $user->posts()->save($post);

                $i++;
            }
        });
    }
}
