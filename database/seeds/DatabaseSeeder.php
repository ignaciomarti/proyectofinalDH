<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(TipoTelefonoSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(TipoDniSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(ComprobanteVentaSeeder::class);
        $this->call(ComprasSeeder::class);
        $this->call(ItemSeeder::class);
    }
}
