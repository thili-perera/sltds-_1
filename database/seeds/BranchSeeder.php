<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert(array(
            array(
                'branch_name' => 'Panadura',
                'branch_code' => '720',

            ),

            array(
                'branch_name' => 'Rathmalana',
                'branch_code' => '105',

            )
        ));
    }
}