<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\model_categoria;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $cat = model_categoria::with(array('productos'=>function($q){
            $q->where('estado','=',1);

        }))

            ->where('estado','=',1)
            ->orderBy('codigo_categoria','desc')
            ->get();
        view()->share('cat', $cat);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
