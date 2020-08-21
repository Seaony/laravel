<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function test(Request $request)
    {
        return $this->response->array(['status' => true]);
    }
}
