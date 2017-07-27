<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
			[
				'type' => 'pa',
				'firstname' => 'Vincent',
				'lastname' => 'De Guille-Jacques',
				'email' => 'vincent@deguille.com',			
			],[
				'type' => 'pa',
				'firstname' => 'Maxime',
				'lastname' => 'Lamarre',
				'email' => 'maxime@lamarre.com',	
			],[
				'type' => 'pa',
				'firstname' => 'Guillaume',
				'lastname' => 'Fortin',
				'email' => 'guillaume@fortin.com',	
			],[
				'type' => 'pr',
				'firstname' => 'Francis',
				'lastname' => 'Morin Brisebois',
				'email' => 'francis@morinbrisebois.com',	
			],[
				'type' => 'pr',
				'firstname' => 'Bruno',
				'lastname' => 'Anghene',
				'email' => 'bruno@anghene.com',
			]
		]);
    }
}
