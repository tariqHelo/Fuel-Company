<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Initial;
class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Initial Sesction
       Initial::create(['number_initial_91'=>'12136877','number_initial_diesel'=>'3168742','number_initial_95'=>'29203880'
    ,'number_initial_kaz'=>'12136877','number_initial_water'=>'363544']);
      // Initial::create(['user_id'=>1]);

    }
}
