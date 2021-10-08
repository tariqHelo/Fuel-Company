<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MonthlyPrice;

class MonthlyPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //MonthlyPrice Sesction
         MonthlyPrice::create([
            'price1_91'=>'2.080','price2_91'=>'2.180',
            'price1_diesel'=>'2.230','price2_diesel'=>'2.33',
            'price1_95'=>'0.520','price2_95'=>'0.520',
            'price2_kaz'=>'0.700','price2_kaz'=>'0.700',
            'price_water'=>'0.6']);
       //  MonthlyPrice::create(['user_id'=>1]);



    }
}
