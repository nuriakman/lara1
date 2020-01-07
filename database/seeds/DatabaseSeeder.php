<?php

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
        $this->call(ASILSeeder::class);
        $this->call(TEKDETAYSeeder::class);
        $this->call(COKDETAYSeeder::class);

        // Çalıştırmak İçin: 
        // ==============================
        // php artisan db:seed
        // php artisan db:seed  --class=ASILSeeder
        
    }
}
