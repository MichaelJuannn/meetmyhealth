<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'email' => 'dudulrill@gmail.com',
            'name' => 'real dudul',
            'birthday' => '2006-5-9',
            'age' => '22',
            'blood_pressure' => '80',
            'diabetes' => '0',
            'password' => bcrypt('123')
        ]);
        Client::create([
            'email' => 'leee@gmail.com',
            'name' => 'lead don',
            'birthday' => '2003-5-7',
            'age' => '24',
            'blood_pressure' => '80',
            'diabetes' => '0',
            'password' => bcrypt('123')
        ]);
        Client::create([
            'email' => 'batemen@gmail.com',
            'name' => 'patric bale',
            'birthday' => '1975-5-7',
            'age' => '50',
            'blood_pressure' => '100',
            'diabetes' => '0',
            'password' => bcrypt('123')
        ]);
        Client::create([
            'email' => 'jets@gmail.com',
            'name' => 'jetstream sam',
            'birthday' => '2004-8-5',
            'age' => '18',
            'blood_pressure' => '70',
            'diabetes' => '0',
            'password' => bcrypt('123')
        ]);
        Client::create([
            'email' => 'raiide@gmail.com',
            'name' => 'loid forger',
            'birthday' => '2007-9-9',
            'age' => '15',
            'blood_pressure' => '80',
            'diabetes' => '0',
            'password' => bcrypt('123')
        ]);
    }
}
