<?php

use Illuminate\Database\Seeder;

class customerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new \App\Customer();
        $customer->id = 1;
        $customer->name = "phan trong dong";
        $customer->birthday = "2017-04-04";
        $customer->andress = "quảng bình";
        $customer->image = "new";
        $customer->save();
    }
}
