<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Seeder;

class alumnoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::factory(10)->create();
    }
}