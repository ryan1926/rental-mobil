<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
<<<<<<< HEAD
{ 
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

=======
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
>>>>>>> ac37d0b2 (pertemuan-12)
        $this->call(RoleSeeder::class);
        $this->call(AkunSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
