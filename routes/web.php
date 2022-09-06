<?php

use App\Http\Controllers\imageC;

route::get('upload','imageC@create');
route::POST('insert','imageC@store');
route::get('show','imageC@show');


