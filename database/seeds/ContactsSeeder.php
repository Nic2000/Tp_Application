<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<3;$i+=1)
        {
                DB::table('contacts')->insert([
                    'first_name' => "first_name$i",
                    'last_name' => "last_name$i",
                    'email' => "email$i@gmail.com",
                    'city' => "city$i",
                    'country' => "country$i",
                    'job_title' => "job_title$i"
            ]);
        }
    }
}
