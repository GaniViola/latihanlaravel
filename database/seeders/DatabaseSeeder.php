<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        Category::factory(4)->create();
        Post::factory(25)->create();
        
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Gani Prasetyo',
        //     'email' => 'ganiprasetyo@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        // User::create([
        //     'name' => 'Elzan Prasetyo',
        //     'email' => 'elzanprasetyo@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        // Category::create([
        //     'name' => 'Web Programing',
        //     'slug' => 'web-programing'
        // ]);

        // Category::create([
        //     'name' => 'Judi Online',
        //     'slug' => 'judi-online'
        // ]);

        // post::create([
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, modi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quisquam mollitia illo saepe omnis laborum dolore nihil quibusdam nisi nobis sunt temporibus aut illum, accusamus sit ea placeat beatae numquam laudantium odio, delectus voluptatibus? Inventore aspernatur architecto excepturi eveniet ipsum neque maxime perferendis, illum minima dicta quod tenetur laboriosam saepe at dolorem eius porro error voluptate rerum beatae vitae id libero dolorum! Odit nemo id officiis quia delectus doloremque at incidunt voluptatem nobis quidem! Consectetur eaque distinctio aliquam temporibus impedit et corporis sunt. Quibusdam unde animi praesentium atque reiciendis quos commodi labore eligendi totam fuga laudantium ipsam magnam sequi iste corporis, vitae voluptatum error repudiandae architecto vero. Voluptatum, odio pariatur nesciunt inventore, perspiciatis eos voluptatem obcaecati enim blanditiis non accusantium?'
        // ]);

        // post::create([
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, modi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quisquam mollitia illo saepe omnis laborum dolore nihil quibusdam nisi nobis sunt temporibus aut illum, accusamus sit ea placeat beatae numquam laudantium odio, delectus voluptatibus? Inventore aspernatur architecto excepturi eveniet ipsum neque maxime perferendis, illum minima dicta quod tenetur laboriosam saepe at dolorem eius porro error voluptate rerum beatae vitae id libero dolorum! Odit nemo id officiis quia delectus doloremque at incidunt voluptatem nobis quidem! Consectetur eaque distinctio aliquam temporibus impedit et corporis sunt. Quibusdam unde animi praesentium atque reiciendis quos commodi labore eligendi totam fuga laudantium ipsam magnam sequi iste corporis, vitae voluptatum error repudiandae architecto vero. Voluptatum, odio pariatur nesciunt inventore, perspiciatis eos voluptatem obcaecati enim blanditiis non accusantium?'
        // ]);

        // post::create([
        //     'category_id' => '2',
        //     'user_id' => '1',
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, modi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quisquam mollitia illo saepe omnis laborum dolore nihil quibusdam nisi nobis sunt temporibus aut illum, accusamus sit ea placeat beatae numquam laudantium odio, delectus voluptatibus? Inventore aspernatur architecto excepturi eveniet ipsum neque maxime perferendis, illum minima dicta quod tenetur laboriosam saepe at dolorem eius porro error voluptate rerum beatae vitae id libero dolorum! Odit nemo id officiis quia delectus doloremque at incidunt voluptatem nobis quidem! Consectetur eaque distinctio aliquam temporibus impedit et corporis sunt. Quibusdam unde animi praesentium atque reiciendis quos commodi labore eligendi totam fuga laudantium ipsam magnam sequi iste corporis, vitae voluptatum error repudiandae architecto vero. Voluptatum, odio pariatur nesciunt inventore, perspiciatis eos voluptatem obcaecati enim blanditiis non accusantium?'
        // ]);

        // post::create([
        //     'category_id' => '2',
        //     'user_id' => '2',
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, modi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quisquam mollitia illo saepe omnis laborum dolore nihil quibusdam nisi nobis sunt temporibus aut illum, accusamus sit ea placeat beatae numquam laudantium odio, delectus voluptatibus? Inventore aspernatur architecto excepturi eveniet ipsum neque maxime perferendis, illum minima dicta quod tenetur laboriosam saepe at dolorem eius porro error voluptate rerum beatae vitae id libero dolorum! Odit nemo id officiis quia delectus doloremque at incidunt voluptatem nobis quidem! Consectetur eaque distinctio aliquam temporibus impedit et corporis sunt. Quibusdam unde animi praesentium atque reiciendis quos commodi labore eligendi totam fuga laudantium ipsam magnam sequi iste corporis, vitae voluptatum error repudiandae architecto vero. Voluptatum, odio pariatur nesciunt inventore, perspiciatis eos voluptatem obcaecati enim blanditiis non accusantium?'
        // ]);
    }
}
