<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class COKDETAY extends Model
{
    // Eğer, farklı bir tablo adı kullanılacaksa aşağıdaki örneğe göre yapılır
    protected $table = "COKDETAY";


    public function Sahibi() {
    	return $this->belongsTo('App\ASIL', 'ASIL_ID', 'id'); //  COKDETAY.ASIL_ID  ====> ASIL.id
    }

}
