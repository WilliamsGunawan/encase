<?php
// Copyright (c) 2022, Williams Gunawan, All rights reserved.
// This source code is licensed under the MIT-style license found in the
// LICENSE file in the root directory of this source tree. 

use Illuminate\Support\Facades\Route;
use Wills\Encase\Http\Controllers\EncaseController;

Route::get('/main', [EncaseController::class, 'index']);
    