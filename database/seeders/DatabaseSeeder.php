<?php

namespace Database\Seeders;

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
         //\App\Models\User::factory(2)->create();
         $this->call([
            // PermissionsTableSeeder::class,
            // RolesTableSeeder::class,
            // PermissionRoleTableSeeder::class,
            // UsersTableSeeder::class,
            // RoleUserTableSeeder::class,
            MonthlyPriceSeeder::class,
            InitialSeeder::class,
         ]);
    }
}
