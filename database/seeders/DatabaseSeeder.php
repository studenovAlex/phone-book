<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\PhoneNumber;
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
        // \App\Models\User::factory(10)->create();
        PhoneNumber::factory()->count(50)->create();
    }
}
