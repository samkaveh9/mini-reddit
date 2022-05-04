<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create(['name' => 'Developing']);
        Topic::create(['name' => 'Design']);
        Topic::create(['name' => 'Devops']);
        Topic::create(['name' => 'Linux and sysadmin']);
        Topic::create(['name' => 'SEO']);
        Topic::create(['name' => 'Business']);
        Topic::create(['name' => 'Other']);
    }
}
