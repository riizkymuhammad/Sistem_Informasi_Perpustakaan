<?php

namespace Database\Seeders;

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
        $this->call(RolesTableSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(BooksTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
