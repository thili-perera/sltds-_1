<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(array(
            array(
                'fname' => 'thili',
                'nic' => Str::random(10),
                'bank_name' => 'sampath',
                'branch' => 'sampath',
                'branch_code' => '522',
                'acc_number' => '123456',
            ),

            array(
                'fname' => 'thari',
                'nic' => Str::random(10),
                'bank_name' => 'sampath',
                'branch' => 'hnb',
                'branch_code' => '170',
                'acc_number' => '456789',

            )
        ));


    }
}
