<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert(array(
            array(
                'bank_name' => 'sampath',
            ),

            array(
                'bank_name' => 'hnb',

            )
        ));
    }
}