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
        \App\Models\User::factory()->create([
            'name' => 'Brenda María Rubio',
            'email' => 'b@admin.com',
            'password' => bcrypt('12345678'),
            'type' => 'PACIENTE'
        ]);
    }
}
