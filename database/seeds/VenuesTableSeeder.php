<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //调用工厂中的设备，去生成数据
        factory(App\Venue::class,80)->create();

    }
}
