<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\School;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $aRole = Role::create([
            'title' => 'Admin',
            'slug' => 'admin',
        ]);

        $sRole = Role::create([
            'title' => 'Student',
            'slug' => 'student',
        ]);

        $school = School::create([
            'title' => 'HKU'
        ]);

        User::factory(10)->create([
            'school_id' => $school->id,
            'role_id' => $sRole->id,
        ]);

        User::create([
            'name' => 'Mahir Tekin',
            'email' => "humbldump@pm.me",
            'password' => bcrypt('123456'),
            'role_id' => $aRole->id,
            'school_id' => $school->id,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
