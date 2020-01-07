<?php

use Illuminate\Database\Seeder;

class ASILSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('ASIL')->insert(
        	[
	        	[
		            'id'=> 1,
		            'adisoyadi'=> 'Nuri Akman',
	        	],
	        	[
		            'id'=> 2,
		            'adisoyadi'=> 'Hasan Çiçek',
	        	],
	        	[
		            'id'=> 3,
		            'adisoyadi'=> 'Batuhan Kaya',
	        	],
	        ]
	    );
    } // run()
}
