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
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(AboutSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(UserSeeder::class);
    }
}