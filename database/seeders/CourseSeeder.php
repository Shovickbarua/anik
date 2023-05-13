<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // Seed the courses table with some sample data
        $courses = [
            [
                'title' => 'Introduction to Computer Science',
                'description' => 'This course provides a gentle introduction to the world of computer science.',
                'class_id' => 1,
                'subject_id' => 2,
                'creator_id' => 1,
                'duration' => '8 weeks',
                'image' => 'https://example.com/images/intro-to-cs.jpg',
            ],
            [
                'title' => 'Advanced Machine Learning',
                'description' => 'This course covers advanced topics in machine learning, including deep neural networks and reinforcement learning.',
                'class_id' => 3,
                'subject_id' => 4,
                'creator_id' => 2,
                'duration' => '12 weeks',
                'image' => 'https://example.com/images/advanced-ml.jpg',
            ],
            [
                'title' => 'Web Development Bootcamp',
                'description' => 'This course covers the fundamentals of web development, including HTML, CSS, and JavaScript.',
                'class_id' => 2,
                'subject_id' => 3,
                'creator_id' => 2,
                'duration' => '10 weeks',
                'image' => 'https://example.com/images/web-dev-bootcamp.jpg',
            ],
            // add more courses as needed
        ];

        // Loop through each course and create a new record in the courses table
        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
