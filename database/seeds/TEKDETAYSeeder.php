<?php

use Illuminate\Database\Seeder;

class TEKDETAYSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('TEKDETAY')->insert(
        	[
	        	[
		            'ASIL_ID'=> 1,
		            'telefonu'=> 'TEL-Nuri',
		            'adresi'=> 'ADR-Nuri',
		            'postakodu'=> 'PKODU-Nuri',

	        	],
	        	[
		            'ASIL_ID'=> 2,
		            'telefonu'=> 'TEL-Hasan',
		            'adresi'=> 'ADR-Hasan',
		            'postakodu'=> 'PKODU-Hasan',
	        	],
	        	[
		            'ASIL_ID'=> 3,
		            'telefonu'=> 'TEL-Batuhan',
		            'adresi'=> 'ADR-Batuhan',
		            'postakodu'=> 'PKODU-Batuhan',
	        	],
	        ]
	    );
    } // run()
}
