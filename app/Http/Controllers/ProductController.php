<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Traits\OrderTraits;

class ProductController extends Controller
{
    use OrderTraits;
    private $data = [];

    public function __construct()
    {
        $this->middleware(function($request, $next) {
            $this->data['typePage'] = $request->type;
            $this->data['info'] = $this->getInfo($request);
            return $next($request);
        });
    }
    public function index() {

        return view('product', $this->data);
    }
}
