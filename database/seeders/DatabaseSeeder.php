<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

use App\Models\Category;

use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    


    public function run()
    {
        User::truncate();

        Post::truncate();

        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            
            'name' => 'Personal',
            
            'slug' => 'personal'

        ]);

        $work = Category::create([
            
            'name' => 'Work',
            
            'slug' => 'work'

        ]);

        $social = Category::create([
            
            'name' => 'Social',
            
            'slug' => 'Social'

        ]);

        Post::create([

            'user_id' => $user->id,

            'category_id' => $personal->id,

            'title' => 'personal blog',

            'excerpt' => 'personal blog excerpt',

            'body' => 'personal blog body',

            'slug' => 'my-personal-post'

        ]);

        Post::create([

            'user_id' => $user->id,

            'category_id' => $work->id,

            'title' => 'work blog',

            'excerpt' => 'work blog excerpt',

            'body' => 'work blog body',

            'slug' => 'my-work-post'

        ]);

        Post::create([

            'user_id' => $user->id,

            'category_id' => $social->id,

            'title' => 'social blog',

            'excerpt' => 'social blog excerpt',

            'body' => 'social blog body',

            'slug' => 'my-social-post'

        ]);
    }
}
