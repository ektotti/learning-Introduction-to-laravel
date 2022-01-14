<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoepleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => 'shino',
            "mail" => 'shino@gmail.com',
            "age" => '99',
        ];

        DB::table('people')->insert($param);
        $param = [
            "name" => 'norihiro',
            "mail" => 'totani@gmail.com',
            "age" => '29',
        ];

        DB::table('people')->insert($param);
        $param = [
            'name' => 'hukai',
            'mail' => 'hukai@gmail.com',
            'age' => '35',
        ];

        DB::table('people')->insert($param);
        $param = [
            'name' => 'kasuga',
            'mail' => 'kasuga@gmail.com',
            'age' => '42',
        ];

        DB::table('people')->insert($param);
    }
}
