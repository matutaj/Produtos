<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportController;

route::resource("index", SupportController::class);