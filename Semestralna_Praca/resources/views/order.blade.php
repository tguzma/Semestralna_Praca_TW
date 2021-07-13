<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Objednávka') }}
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
                        <div class="container">
                            <h2 class="text-center">Obednaj produkt</h2>
                            <br>
                            <form action="/order" method="post">
                                @csrf
                                <input type="hidden" value="{{$data['id']}}" type="number" class="form-control" placeholder="ID" name="id">
                                <ul class="list-group">
                                    <li value="{{$data['product_name']}}" name="product_name" type="text" class="list-group-item">Názov produktu: {{$data['product_name']}}</li>
                                    <li value="{{$data['price']}}" name="price" type="double" class="list-group-item">Cena za kus: {{$data['price']}}</li>
                                    <li value="{{$data['description']}}" name="description" type="text" class="list-group-item">Popis produtku: {{$data['description']}}</li>
                                    <li value="{{$data['number_in_stock']}}" name="number_in_stock" type="number" class="list-group-item">Počet na sklade: {{$data['number_in_stock']}}</li>
                                </ul>
                                <label>Počet kusov ktoré chcete objednať: </label>
                                <input max = "{{$data['number_in_stock']}}" type="number" class="form-control" placeholder="Vložte počet kusov" id="numberToOrder" name="numberToOrder"><br>
                                <input  class="btn btn-primary" type="submit" value="Objednaj" <?php if ( $data['number_in_stock'] <= '0'){ ?> disabled <?php   } ?>>

                        </div>
                        </form>
                </div>
                </body>

                </html>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>