<?php

namespace App\Providers;

use App\Mixins\StrMixins;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Str::macro('partNumber',function ($part){
            return 'AB-'.substr($part,0,3).'-'.substr($part,3);
        });

        Str::mixin(new StrMixins(),false);

        ResponseFactory::macro('errorJson',function ($message ='Default error message'){
            return [
                'message'=>$message,
                'error_code'=>123,
            ];
        });
    }
}
