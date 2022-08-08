<?php

namespace Database\Seeders;

use App\Models\Admin\Camp;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::query()->create([
            'name' => 'Admin',
            'email' => 'Admin@admin.ru',
            'password' => Hash::make('Wdv7vOG4smartMinsk2020'),
        ]);
    }
}
