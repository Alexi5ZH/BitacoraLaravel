<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Producto();
        $p->codigo = "ABC123";
        $p->nombre = "Producto 1";
        $p->descripcion = "Descripción del producto 1";
        $p->save();

        $p = new Producto();
        $p->codigo = "DEF456";
        $p->nombre = "Producto 2";
        $p->descripcion = "Descripción del producto 2";
        $p->save();

        $p = new Producto();
        $p->codigo = "GHI789";
        $p->nombre = "Producto 3";
        $p->descripcion = "Descripción del producto 3";
        $p->save();

        $p = new Producto();
        $p->codigo = "JKL012";
        $p->nombre = "Producto 4";
        $p->descripcion = "Descripción del producto 4";
        $p->save();

        $p = new Producto();
        $p->codigo = "MNO345";
        $p->nombre = "Producto 5";
        $p->descripcion = "Descripción del producto 5";
        $p->save();

        $p = new Producto();
        $p->codigo = "PQR678";
        $p->nombre = "Producto 6";
        $p->descripcion = "Descripción del producto 6";
        $p->save();

        $p = new Producto();
        $p->codigo = "STU901";
        $p->nombre = "Producto 7";
        $p->descripcion = "Descripción del producto 7";
        $p->save();

        $p = new Producto();
        $p->codigo = "VWX234";
        $p->nombre = "Producto 8";
        $p->descripcion = "Descripción del producto 8";
        $p->save();

        $p = new Producto();
        $p->codigo = "YZU567";
        $p->nombre = "Producto 9";
        $p->descripcion = "Descripción del producto 9";
        $p->save();

        $p = new Producto();
        $p->codigo = "ACB123";
        $p->nombre = "Producto 10";
        $p->descripcion = "Descripción del producto 10";
        $p->save();
    

    }
}
