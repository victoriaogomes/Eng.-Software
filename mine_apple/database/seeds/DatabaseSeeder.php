<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsuarioTableSeeder::class,
            BancoTableSeeder::class,
            CategoriaTableSeeder::class,
            EmbalagemTableSeeder::class,
            EstadoTableSeeder::class,
            CidadeTableSeeder::class,
            EnderecoTableSeeder::class,
            ConsumidorTableSeeder::class,
            ProdutorTableSeeder::class,
            ConsumidorEnderecoTableSeeder::class,
            ProdutoTableSeeder::class
        ]);

    }
}
