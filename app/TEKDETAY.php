<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TEKDETAY extends Model
{
    // Eğer, farklı bir tablo adı kullanılacaksa aşağıdaki örneğe göre yapılır
    protected $table = "TEKDETAY";

    public function Sahibi() {
    	return $this->belongsTo('App\ASIL', 'ASIL_ID', 'id'); //  TEKDETAY.ASIL_ID  ====> ASIL.id
    }

}
