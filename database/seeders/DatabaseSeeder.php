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
        $user = User::factory()->create([
            'name' => 'Ayatullah Khameni'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}
        

















        //     $personal = Category::create([
            
    //         'name' => 'Personal',
            
    //         'slug' => 'personal'

    //     ]);

    //     $work = Category::create([
            
    //         'name' => 'Work',
            
    //         'slug' => 'work'

    //     ]);

    //     $social = Category::create([
            
    //         'name' => 'Social',
            
    //         'slug' => 'Social'

    //     ]);

    //     Post::create([

    //         'user_id' => $user->id,

    //         'category_id' => $personal->id,

    //         'title' => 'personal blog',

    //         'excerpt' => 'personal blog excerpt',

    //         'body' => '<p>personal blog body</p>',

    //         'slug' => 'my-personal-post'

    //     ]);

    //     Post::create([

    //         'user_id' => $user->id,

    //         'category_id' => $work->id,

    //         'title' => 'work blog',

    //         'excerpt' => 'work blog excerpt',

    //         'body' => '<p>work blog body</p>',

    //         'slug' => 'my-work-post'

    //     ]);

    //     Post::create([

    //         'user_id' => $user->id,

    //         'category_id' => $social->id,

    //         'title' => 'social blog',

    //         'excerpt' => '<p>social blog excerpt</p>',

    //     'body' => '<p>social blog body</p>',

    //         'slug' => 'my-social-post'

    //     ]);
    //
