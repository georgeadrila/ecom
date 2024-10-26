<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(10)->create();
        // Listing::create([
        //     'title' => 'Senior Developer',
        //     'tags' => 'PHP, Laravel, Vue.js',
        //     'company' => 'Acme Inc.',
        //     'location' => 'New York, NY',
        //     'website' => 'https://acme.com',
        //     'email' => 'monkey@gmail.com',
        //     'description' => 'We are looking for a senior
        //      developer to join our team. You will be working
        //       on a very weird project'
        // ]);

        // Listing::create([
        //     'title' => 'Junior Developer',
        //     'tags' => 'PHP, Laravel, Vue.js',
        //     'company' => 'Acme Inc.',
        //     'location' => 'New York, NY',
        //     'website' => 'https://acme.com',
        //     'email' => 'monkey3@gmail.com',
        //     'description' => 'We are looking for a junior
        //      developer to join our team. You will be working
        //       on a very weird project'
        // ]);

    }
}
