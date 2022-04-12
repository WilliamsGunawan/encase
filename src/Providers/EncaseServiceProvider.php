<?php
// Copyright (c) 2022, Williams Gunawan, All rights reserved.
// This source code is licensed under the MIT-style license found in the
// LICENSE file in the root directory of this source tree. 

namespace Wills\Encase\Providers;

use Illuminate\Support\ServiceProvider;

class EncaseServiceProvider extends ServiceProvider {
    public function boot() {

    }
    public function register() {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'encase');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}