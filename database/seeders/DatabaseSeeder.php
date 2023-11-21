<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->call(ProvincesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(UbicacionSeeder::class);
        $this->call(AvatarSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(MercadoSeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(EtiquetasSeeder::class);
        $this->call(EmpresasSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(ChatSeeder::class);
        $this->call(DonacionesSeeder::class);
        $this->call(EventosSeeder::class);
        $this->call(ArticulosSeeder::class);
        $this->call(ComprasSeeder::class);
        $this->call(ComentariosBlogSeeder::class);
        $this->call(ComentariosEventosSeeder::class);


    }
}
