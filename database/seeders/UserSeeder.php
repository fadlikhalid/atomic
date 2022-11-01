<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'aldika2', 'shafaraananta@gmail.com', NULL, 0, NULL, NULL, '$2y$10$BJdKm9PQvaya/hxPMvueMe/LF.gnvB0.68cEO/2OVBk9EcV7lFg6K', NULL, '2022-01-19 11:00:55', '2022-01-19 11:00:55'),
        User::create(['name' => 'john doe', 'email' => 'johnddoe123@gmail.com', 'password' => 'password']);
    }
}
