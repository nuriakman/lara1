<?php

use Illuminate\Database\Seeder;

class COKDETAYSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('COKDETAY')->insert(
        	[
	        	[
		            'ASIL_ID' => 1,
		            'satisTarihi' => 'SATIS-TAR-Nuri1',
		            'satilanUrunAdi' => 'SAT-URUN-Nuri1',
	        	],
	        	[
		            'ASIL_ID' => 1,
		            'satisTarihi' => 'SATIS-TAR-Nuri2',
		            'satilanUrunAdi' => 'SAT-URUN-Nuri2',
	        	],
	        	[
		            'ASIL_ID' => 1,
		            'satisTarihi' => 'SATIS-TAR-Nuri3',
		            'satilanUrunAdi' => 'SAT-URUN-Nuri3',
	        	],
	        	[
		            'ASIL_ID' => 2,
		            'satisTarihi' => 'SATIS-TAR-Hasan1',
		            'satilanUrunAdi' => 'SAT-URUN-Hasan1',
	        	],
	        	[
		            'ASIL_ID' => 2,
		            'satisTarihi' => 'SATIS-TAR-Hasan2',
		            'satilanUrunAdi' => 'SAT-URUN-Hasan2',
	        	],
	        	[
		            'ASIL_ID' => 3,
		            'satisTarihi' => 'SATIS-TAR-Batuhan',
		            'satilanUrunAdi' => 'SAT-URUN-Batuhan',
	        	],
	        	[
		            'ASIL_ID' => 3,
		            'satisTarihi' => 'SATIS-TAR-Batuhan',
		            'satilanUrunAdi' => 'SAT-URUN-Batuhan',
	        	],
	        	[
		            'ASIL_ID' => 3,
		            'satisTarihi' => 'SATIS-TAR-Batuhan',
		            'satilanUrunAdi' => 'SAT-URUN-Batuhan',
	        	],
	        	[
		            'ASIL_ID' => 3,
		            'satisTarihi' => 'SATIS-TAR-Batuhan',
		            'satilanUrunAdi' => 'SAT-URUN-Batuhan',
	        	],
	        	[
		            'ASIL_ID' => 3,
		            'satisTarihi' => 'SATIS-TAR-Batuhan',
		            'satilanUrunAdi' => 'SAT-URUN-Batuhan',
	        	],
	        ]
	    );
    } // run()
}
