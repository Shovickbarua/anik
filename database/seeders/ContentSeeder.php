<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'website_name' => 'Lekha Pora',
            'website_description' => 'A Learning Alternate',
            'website_logo' => 'logo.png',
            'website_favicon' => 'logo.png',
            'website_email' => 'info@lekhapora.com',
            'website_phone' => '+880 0000000001',
            'website_address' => 'House: 2 Dhaka-121',
            'about_content' =>'Lekhapora is a Learning Management System (LMS) designed to provide an efficient and engaging online learning experience. It is a platform that allows teachers and students to connect, collaborate, and learn from anywhere, anytime. With Lekhapora, students can access a wide range of educational resources, participate in discussions, and complete assignments. Teachers can create and manage courses, deliver lectures, and evaluate student performance. Lekhapora is a comprehensive tool that simplifies the process of teaching and learning, making education accessible to all.',
            'about_image' => '1680173512.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
