<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'lname' => 'Valleser',
                'fname' => 'Honey Joyce',
                'username' => 'honeyjoyce',
                'password' => bcrypt('hanjoyce'),
                'email' => 'honeyjoyce@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Poole',
                'fname' => 'Jordan',
                'username' => 'jpoole',
                'password' => bcrypt('jordanp'),
                'email' => 'poole@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Thompson',
                'fname' => 'Klay',
                'username' => 'klaythomp',
                'password' => bcrypt('thompsonk'),
                'email' => 'klay@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Kuzma',
                'fname' => 'Kyle',
                'username' => 'kylekuzma',
                'password' => bcrypt('kylekuz'),
                'email' => 'kuz@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
