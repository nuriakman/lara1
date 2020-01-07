<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ASIL extends Model
{
    // Eğer, farklı bir tablo adı kullanılacaksa aşağıdaki örneğe göre yapılır
    protected $table = "ASIL";

    public function tekDetay() {
    	return $this->hasOne('App\TEKDETAY', 'ASIL_ID', 'id'); // TEKDETAY.ASIL_ID  ====> ASIL.id

    }

    public function cokDetay() {
    	return $this->hasMany('App\COKDETAY', 'ASIL_ID', 'id'); // COKDETAY.ASIL_ID  ====> ASIL.id
    }
}
