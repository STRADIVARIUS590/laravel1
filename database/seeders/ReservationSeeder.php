<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;
class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        $res = new Reservation();
        $res->room_id = '3';
        $res->client_card = '3123-1233-3434-3424';
        $res->save();


        $res = new Reservation();
        $res->room_id = '1';
        $res->client_card = '5423-1245-7834-4424';
        $res->save();
    }
}
