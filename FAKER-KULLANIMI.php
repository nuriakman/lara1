



// ======================================================

php artisan db:seed
php artisan migrate:fresh


php artisan tinker ile Factory Kullanımı:

$faker = Faker\Factory::create('tr_TR');
use \App\Yazar;
$Yazar = new Yazar;
$Yazar->yazarAdi = $faker->name;
$Yazar->save();





<?php

// DOSYA ADI: database/seeds/DatabaseSeeder.php
// ======================================================

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
        factory(App\Kitap::class, 100)->create();
        //factory(App\Yayinevi::class, 10)->create();
        //factory(App\Yazar::class, 20)->create();

    }
}



<?php


// DOSYA ADI: database/factories/KitapFactory.php
// ======================================================

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Kitap::class, function (Faker $faker) {
    return [
         'kitapAdi' => $faker->sentence(6),
         'kitapAciklama' => $faker->paragraph,
         'yayinYili' => $faker->numberBetween(1950, date("Y")),
         'yazar_id' => $faker->numberBetween(1, 50),
         'yayinevi_id' => $faker->numberBetween(1, 20),
    ];
});


