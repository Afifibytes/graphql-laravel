<?php

namespace App\Services;

final class OrderQueries
{
    const FIRST_TWENTY_ORDERS = '
        orders {
            request_id
            complexity
            data(first: 20) {
                edges {
                    node {
                        id
                        order_number
                        fulfillment_status
                        shipping_address {
                            first_name
                            last_name
                            city
                            address1
                            phone
                            email
                        }
                        total_price
                        ready_to_ship
                        required_ship_date
                        shop_name
                    }
                }
            }
        }
    ';
}
