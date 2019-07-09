<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
        	'countries_id'=>'1',
        	'name'=>'Alicante'
        ]);
        State::create([
        	'countries_id'=>'1',
        	'name'=>'Málaga'
        ]);
        State::create([
        	'countries_id'=>'1',
        	'name'=>'Murcia'
        ]);
        State::create([
        	'countries_id'=>'2',
        	'name'=>'Valencia'
        ]);
        State::create([
        	'countries_id'=>'2',
        	'name'=>'Maracay'
        ]);
        State::create([
        	'countries_id'=>'2',
        	'name'=>'Caracas'
        ]);
        State::create([
        	'countries_id'=>'3',
        	'name'=>'Berlín'
        ]);
        State::create([
        	'countries_id'=>'3',
        	'name'=>'Munich'
        ]);
        State::create([
        	'countries_id'=>'3',
        	'name'=>'Hamburgo'
        ]);
    }
}
