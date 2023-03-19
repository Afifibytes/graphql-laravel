<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Routing\Controller;

class OrdersController extends Controller
{

    public function view(OrderService $orderService)
    {
        return view('ordersView')->with('ordersData', $orderService->getOrders());
    }

}
