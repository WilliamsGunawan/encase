<?php 
// Copyright (c) 2022, Williams Gunawan, All rights reserved.
// This source code is licensed under the MIT-style license found in the
// LICENSE file in the root directory of this source tree. 

namespace Wills\Encase\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EncaseController extends Controller {
    
    public function index(Request $request) {
       return view('encase::layout.main');
    }
    
    public function admin(Request $request) {
       return view('encase::layout.admin');
    }

}