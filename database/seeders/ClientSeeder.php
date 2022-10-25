<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*  */
        $client = new Client();
        $client->name = 'joel';
        $client->email = 'joel@uabcs.com';
        $client->phone_number = '4325376235';
        $client->save();


                $client = new Client();
        $client->name = 'fwqe';
        $client->phone_number = '436235';
        $client->email = 'joel@dsvdbguabcs.com';
        $client->save();


    }
}
