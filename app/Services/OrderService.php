<?php

namespace App\Services;

use BendeckDavid\GraphqlClient\Facades\GraphQL;
use Exception;

class OrderService implements GraphqlOrders
{
    public function getOrders()
    {
        try {
            return GraphQL::query(OrderQueries::FIRST_TWENTY_ORDERS)->get();
        } catch (Exception) {
            return ["Error" => "Can't get any order from the API!"];
        }
    }
}


