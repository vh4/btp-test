<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningactivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Learningactivity::factory()->create([
            'user_id' => 1,
            'metode' => 'Workshop/Self-Learning',
            'januari' => '',
            'februari' => '',
            'maret' => '',
            'april' => '',
            'mei' => '',
            'juni' => '',
        ]);
    }
}
