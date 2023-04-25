<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Seeder Admin
        Admin::create([
            'name' => 'adminBLUG',
            'username' => 'admin123',
            'password' => bcrypt('1234')
        ]);

        // Seeder Divisi
        Divisi::create([
            'name' => 'Inti'
        ]);

        Divisi::create([
            'name' => 'Medinfo'
        ]);

        Divisi::create([
            'name' => 'Siber'
        ]);

        Divisi::create([
            'name' => 'Programming'
        ]);

        // Seeder Category
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => ' personal'
        ]);

        // Seeder Post
        $adminUuid = DB::select('SELECT * FROM admins LIMIT 1');
        foreach ($adminUuid as $uuid) {
            Post::create([
                'title' => "Judul Pertama",
                'category_id' => 1,
                'admin_id' => $uuid->id,
                'slug' => "judul-pertama",
                'excerpt' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, dolore.",
                'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium alias error ad placeat hic dolore ipsa natus, quia libero veritatis.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis recusandae nobis itaque enim deleniti quibusdam at est iste impedit natus!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem earum quasi fuga? Est ad sed cum. Debitis, suscipit fugit. Fuga.</p>"
            ]);
    
            Post::create([
                'title' => "Judul Kedua",
                'category_id' => 1,
                'admin_id' => $uuid->id,
                'slug' => "judul-kedua",
                'excerpt' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, dolore.",
                'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium alias error ad placeat hic dolore ipsa natus, quia libero veritatis.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis recusandae nobis itaque enim deleniti quibusdam at est iste impedit natus!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem earum quasi fuga? Est ad sed cum. Debitis, suscipit fugit. Fuga.</p>"
            ]);
    
            Post::create([
                'title' => "Judul Ketiga",
                'category_id' => 2,
                'admin_id' => $uuid->id,
                'slug' => "judul-ketiga",
                'excerpt' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, dolore.",
                'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium alias error ad placeat hic dolore ipsa natus, quia libero veritatis.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis recusandae nobis itaque enim deleniti quibusdam at est iste impedit natus!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem earum quasi fuga? Est ad sed cum. Debitis, suscipit fugit. Fuga.</p>"
            ]);
    
            Post::create([
                'title' => "Judul Keempat",
                'category_id' => 2,
                'admin_id' => $uuid->id,
                'slug' => "judul-keempat",
                'excerpt' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, dolore.",
                'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium alias error ad placeat hic dolore ipsa natus, quia libero veritatis.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis recusandae nobis itaque enim deleniti quibusdam at est iste impedit natus!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem earum quasi fuga? Est ad sed cum. Debitis, suscipit fugit. Fuga.</p>"
            ]);
        }
    }
}
