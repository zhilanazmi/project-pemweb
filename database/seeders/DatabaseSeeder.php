<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Modules\Shop\database\seeders\ShopDatabaseSeeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        if ($this->command->confirm('Do you want to refresh migration before seeding, it will clear all old data ?')) {
            $this->command->call('migrate:refresh');
            $this->command->info('Database was refreshed, starting from blank database');
        }

        User::factory()->create();
        $this->command->info('Sample user seeded');

        if($this->command->confirm('Do you want to seed some sample Products? ')) {
           $this->call(ShopDatabaseSeeder::class);
        }
    }
}
