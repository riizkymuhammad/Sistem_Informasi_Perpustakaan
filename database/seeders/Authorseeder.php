<?php

namespace Database\Seeders;

use App\Models\Author;

use Illuminate\Database\Seeder;

class Authorseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory()->count(10)->create();
    }
}
