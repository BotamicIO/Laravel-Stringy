<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Stringy.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Stringy;

use Illuminate\Support\ServiceProvider as IlluminateProvider;
use Stringy\StaticStringy;

class StringyServiceProvider extends IlluminateProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton('stringy', function ($app) {
            return new StaticStringy();
        });
    }
}
