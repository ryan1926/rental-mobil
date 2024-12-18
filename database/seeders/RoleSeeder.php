<?php

namespace Database\Seeders;
<<<<<<< HEAD
=======

>>>>>>> ac37d0b2 (pertemuan-12)
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
<<<<<<< HEAD
{  
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $roles = [
            [
            'nama_role'=> 'Super Admin',
             'kode_role'=> 'Sad'
            ],
            [
            'nama_role'=> 'Admin',
             'kode_role'=> 'ADM'
             ],
             [
            'nama_role'=> 'Customer',
             'kode_role'=> 'CST'
             ]
     ];
     foreach ($roles as $index=> $role){
        Role::create([
            'nama_role'=> $role['nama_role'],
            'kode_role'=> $role['kode_role']
        ]);
     }

=======
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        $roles = [
            [
                'nama_role' => 'Super Admin',
                'kode_role' => 'SAD'
            ],
            [
                'nama_role' => 'Admin',
                'kode_role' => 'ADM'
            ],
            [
                'nama_role' => 'Customer',
                'kode_role' => 'CST'
            ]
        ];

        foreach ($roles as $role) {
            Role::create([
                'nama_role' => $role['nama_role'],
                'kode_role' => $role['kode_role']
            ]);
        }
>>>>>>> ac37d0b2 (pertemuan-12)
    }
}
