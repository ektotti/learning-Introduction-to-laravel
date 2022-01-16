<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restdata;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'Google Japan',
            'url' => 'https://www.google.co.jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();
        
        $param = [
            'message' => 'Gold Japan',
            'url' => 'https://www.gold.co.jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();
        
        $param = [
            'message' => 'Apple Japan',
            'url' => 'https://www.Apple.co.jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();
    }
}
