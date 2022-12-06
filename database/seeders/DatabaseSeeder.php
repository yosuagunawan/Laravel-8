<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(3)->create();

        User::create([
            'name' => 'Sandina Kusmawati',
            'username' => 'sandina.kusmawati',
            'email' => 'sandinakusmawati@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Jagaraga Haryanto',
            'username' => 'jagaraga.haryanto',
            'email' => 'jagaragaharyanto@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => ' Langgeng Jinawi Adriansyah',
            'username' => 'langgeng.jinawi.adriansyah',
            'email' => 'langgengjinawiadriansyah@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);
        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem minima quidem laudantium a.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem minima quidem laudantium a. Vitae distinctio, ullam ex suscipit hic molestiae maxime quae ipsa eveniet rerum officia nam eius repellendus quis inventore aperiam debitis accusamus perspiciatis culpa, illum deserunt.</p><p>Quidem necessitatibus ipsa incidunt ipsam quae dicta laborum repellat obcaecati, totam natus cum et commodi provident amet excepturi voluptates porro quis. Ut provident molestiae repellat, sunt doloribus quae temporibus maxime rem velit in inventore nam rerum aperiam sed repudiandae itaque? Harum consequatur amet id architecto veritatis, laboriosam inventore cumque enim temporibus saepe qui aliquid quo adipisci recusandae, ipsum porro nemo nihil ut? Consequuntur ipsa minus ducimus autem explicabo quos, mollitia labore ut tenetur adipisci suscipit tempore est earum enim non error provident sunt aperiam.</p><p>Ipsam ducimus in perspiciatis ipsum officia quidem, sit amet nulla nostrum assumenda veritatis facilis ea aliquam accusantium quisquam totam magni ullam minus dolore vel maiores dolores explicabo voluptatem?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem minima quidem laudantium a.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem minima quidem laudantium a. Vitae distinctio, ullam ex suscipit hic molestiae maxime quae ipsa eveniet rerum officia nam eius repellendus quis inventore aperiam debitis accusamus perspiciatis culpa, illum deserunt.</p><p>Quidem necessitatibus ipsa incidunt ipsam quae dicta laborum repellat obcaecati, totam natus cum et commodi provident amet excepturi voluptates porro quis. Ut provident molestiae repellat, sunt doloribus quae temporibus maxime rem velit in inventore nam rerum aperiam sed repudiandae itaque? Harum consequatur amet id architecto veritatis, laboriosam inventore cumque enim temporibus saepe qui aliquid quo adipisci recusandae, ipsum porro nemo nihil ut? Consequuntur ipsa minus ducimus autem explicabo quos, mollitia labore ut tenetur adipisci suscipit tempore est earum enim non error provident sunt aperiam.</p><p>Ipsam ducimus in perspiciatis ipsum officia quidem, sit amet nulla nostrum assumenda veritatis facilis ea aliquam accusantium quisquam totam magni ullam minus dolore vel maiores dolores explicabo voluptatem?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem minima quidem laudantium a.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem minima quidem laudantium a. Vitae distinctio, ullam ex suscipit hic molestiae maxime quae ipsa eveniet rerum officia nam eius repellendus quis inventore aperiam debitis accusamus perspiciatis culpa, illum deserunt.</p><p>Quidem necessitatibus ipsa incidunt ipsam quae dicta laborum repellat obcaecati, totam natus cum et commodi provident amet excepturi voluptates porro quis. Ut provident molestiae repellat, sunt doloribus quae temporibus maxime rem velit in inventore nam rerum aperiam sed repudiandae itaque? Harum consequatur amet id architecto veritatis, laboriosam inventore cumque enim temporibus saepe qui aliquid quo adipisci recusandae, ipsum porro nemo nihil ut? Consequuntur ipsa minus ducimus autem explicabo quos, mollitia labore ut tenetur adipisci suscipit tempore est earum enim non error provident sunt aperiam.</p><p>Ipsam ducimus in perspiciatis ipsum officia quidem, sit amet nulla nostrum assumenda veritatis facilis ea aliquam accusantium quisquam totam magni ullam minus dolore vel maiores dolores explicabo voluptatem?</p>'
        // ]);
    }
}
