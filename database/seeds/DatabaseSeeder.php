<?php

use App\Models\Contact;
use Database\Seeders\ContactsSeeder as SeedersContactsSeeder;
use Database\Seeds\ContactsSeeder;
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
        // $this->call(UsersTableSeeder::class);

        $this->call(ContactsSeeder::class);


    }
}
