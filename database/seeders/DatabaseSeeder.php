<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                "title" => "First post",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus illo nulla facilis culpa quia voluptatem sed optio, ducimus perferendis exercitationem vel quis consectetur odio amet sit enim dolore molestiae! Temporibus quaerat dolores deleniti accusantium soluta est inventore cupiditate provident excepturi? Dicta repellendus fugit sapiente omnis, officia ad. Similique dolor ut, saepe minima vel obcaecati? Harum a ex hic, aliquam officiis optio atque esse cum quibusdam omnis quis. Quisquam, explicabo repudiandae!"
            ],
            [
                "title" => "Second postoh",
                "description" => "Lorem ipsum dolor sit amet conseuptatem sed optio, ducimus perferendis exercitationem vel quis consectetur odio amet sit enim dolore molestiae! Temporibus quaerat dolores deleniti accusantium soluta est inventore cupiditate provident excepturi? Dicta repellendus fugit sapiente omnis, officia ad. Similique dolor ut, saepe minima vel obcaecati? Harum a ex hic, aliquam officiis optio atque esse cum quibusdam omnis quis. Quisquam, explicabo repudiandae!"
            ],
            [
                "title" => "Postingan Ketiga",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus illo nulla facilis culpa quia voluptatem sed optio, ducimus perferendis exercitationem vel quis consectetur odio amet sit enidae!"
            ]
        ]);
    }
}