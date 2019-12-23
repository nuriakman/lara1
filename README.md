# Laravel İle İlk Örnek

Bu proje Laravel öğrenme süreçlerim içinde oluşturduğum ilk örnektir.


## Kurulum Adım 1
```BASH
git clone git@github.com:nuriakman/lara1.git
cd lara1
composer install
```


## .env Dosyası Ayarlar
`.env.example` dosyası `.env` adı ile çoğaltılır (veya adı değiştirilir) ve aşağıdaki satırlar düzenlenir

```
APP_NAME="Kitapçı Uygulaması"
APP_URL=http://localhost/lara/lara1
DB_DATABASE=kitapci
DB_USERNAME=root
DB_PASSWORD=root
```


## Kurulum Adım 2
```BASH
php artisan key:generate
php artisan migrate
```


## Kullanılan Laravel Komutları
```BASH
php artisan key:generate
php artisan make:model Yazar -m
php artisan migrate
php artisan make:controller YazarController --resource
php artisan make:request yazarRequest

php artisan down
php artisan down --message="Veritabanı güncelleniyor." --retry=60
php artisan up

```
