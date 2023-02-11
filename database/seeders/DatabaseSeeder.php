<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\User;
use Database\Factories\GradeFactory;
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
        Grade::create([
            'name'=>'Primary stage',
            'Notes'=>"fisrt add"
        ]);
        Grade::create([
            'name'=>'middle stage',
            'Notes'=>"fisrt add"
        ]);
        Grade::create([
            'name'=>'High school stage',
            'Notes'=>"fisrt add"
        ]);
        
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => 'admin123', // password
            
        ]);
        // \App\Models\User::factory(10)->create();
       
    }
}
