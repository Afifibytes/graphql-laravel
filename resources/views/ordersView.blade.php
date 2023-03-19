<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GraphQL Laravel</title>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="antialiased">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                </div>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Fulfillment Status</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Address 1</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Ready to Ship?</th>
                            <th scope="col">Required Ship Date</th>
                            <th scope="col">Shop Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ordersData['orders']['data']['edges'] as $order)
                        <tr>
                        @foreach($order as $orderArray)
                            @foreach($orderArray as $orderDetails)
                                @if (is_array($orderDetails))
                                        @foreach($orderDetails as $addressData)
                                            <th scope="row">{{$addressData}}</th>
                                        @endforeach
                                    @else
                                        <th scope="row">{{$orderDetails}}</th>
                                    @endif
                                @endforeach
                        @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
