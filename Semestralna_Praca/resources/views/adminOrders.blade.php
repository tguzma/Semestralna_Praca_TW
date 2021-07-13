<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Objednávky') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <x-slot name="logo">
                            <a href="/">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a>
                        </x-slot>
                        <!-- Bootstrap CSS -->
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">


                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                    <body>
                        <table class="table table-striped col-sm-6">
                            <thead>
                                <tr>
                                    <th scope="col">ID objednávky</th>
                                    <th scope="col">ID produktu</th>
                                    <th scope="col">Názov produktu</th>
                                    <th scope="col">Počet objednaných kusov</th>
                                    <th scope="col">Celková cena (€)</th>
                                    <th scope="col">Meno zákazníka</th>
                                    <th scope="col">Adresa zákazníka</th>
                                    <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <th scope="col">{{$order['id']}}</th>
                                    <th scope="col">{{$order['product_id']}}</th>
                                    <th scope="col">{{$order['product_name']}}</th>
                                    <th scope="col">{{$order['number_requested']}}</th>
                                    <th scope="col">{{$order['total_price']}}</th>
                                    <th scope="col">{{$order['customer_username']}}</th>
                                    <th scope="col">{{$order['customer_adress']}}</th>
                                    <th>
                                        <a class="btn btn-danger" href={{"deleteOrder/".$order['id']}} role="button">Zmazať</a>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </body>

                    <body>
                        <table class="table table-striped col-sm-6">
                            <thead>

                            </thead>
                        </table>
                    </body>

                    </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>