<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       #\App\Models\User::factory(5)->create();
       $user = User::factory()->create([
            'name'=>'Ebraim Sambo',
            'email'=>'ebraimsambo@gmail.com'
       ]);
       Listing::factory(6)->create([
            'user_id'=> $user->id
       ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
 /*
        Listing::create([
            'title'=> 'Laravel DeveLoper',
            'tags'=> 'laravel, javascript',
            'company'=> 'Alura DeveLoper',
            'location'=> 'Luanda',
            'email'=> 'ebraimsambo@gmail.com',
            'website'=> 'wwww.alura.com',
            'description'=> 'Laravel DeveLoper Laravel DeveLoper',
        ]);

        Listing::create([
            'title'=> 'FullStack DeveLoper',
            'tags'=> 'fullstack, programing',
            'company'=> 'fredecomp',
            'location'=> 'Huambo',
            'email'=> 'fredecomp@gmail.com',
            'website'=> 'wwww.fredecomp.com',
            'description'=> 'Laravel DeveLoper Laravel DeveLoper',
        ]);

        */
    }
}
