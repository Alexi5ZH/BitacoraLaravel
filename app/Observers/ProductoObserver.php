<?php

namespace App\Observers;

use App\Models\Bitacora;
use App\Models\Producto;

class ProductoObserver
{
    /**
     * Handle the Producto "created" event.
     *
     * @param  \App\Models\Producto  $producto
     * @return void
     */
    public function created(Producto $producto)
    {

        if (auth()->user()) {
            $bitacora = new Bitacora();
            $bitacora->user_id = auth()->user()->id;
            $bitacora->host = auth()->user()->name;
            $bitacora->ip_address = request()->ip();
            $bitacora->tabla = 'productos';
            $bitacora->registro_id = $producto->id;
            $bitacora->accion = 'crear';
            $bitacora->fecha = date('Y-m-d H:i:s');

            $bitacora->save();
        }
    }

    /**
     * Handle the Producto "updated" event.
     *
     * @param  \App\Models\Producto  $producto
     * @return void
     */
    public function updated(Producto $producto)
    {
        if (auth()->user()) {
            $bitacora = new Bitacora();
            $bitacora->user_id = auth()->user()->id;
            $bitacora->host = auth()->user()->name;
            $bitacora->ip_address = request()->ip();
            $bitacora->tabla = 'productos';
            $bitacora->registro_id = $producto->id;
            $bitacora->accion = 'actualizar';
            $bitacora->fecha = date('Y-m-d H:i:s');
            $bitacora->save();
        }
    }

    /**
     * Handle the Producto "deleted" event.
     *
     * @param  \App\Models\Producto  $producto
     * @return void
     */
    public function deleted(Producto $producto)
    {
        if (auth()->user()) {
            $bitacora = new Bitacora();
            $bitacora->user_id = auth()->user()->id;
            $bitacora->host = auth()->user()->name;
            $bitacora->ip_address = request()->ip();
            $bitacora->tabla = 'productos';
            $bitacora->registro_id = $producto->id;
            $bitacora->accion = 'eliminar';
            $bitacora->fecha = date('Y-m-d H:i:s');
            $bitacora->save();
        }
    }

    /**
     * Handle the Producto "restored" event.
     *
     * @param  \App\Models\Producto  $producto
     * @return void
     */
    public function restored(Producto $producto)
    {
        //
    }

    /**
     * Handle the Producto "force deleted" event.
     *
     * @param  \App\Models\Producto  $producto
     * @return void
     */
    public function forceDeleted(Producto $producto)
    {
        //
    }
}
