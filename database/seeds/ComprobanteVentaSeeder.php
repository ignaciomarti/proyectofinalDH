<?php

use Illuminate\Database\Seeder;

class ComprobanteVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ComprobanteVenta::class, 20)->create();
    }
}
