<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pridaj produkt') }}
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
                            <h2 class="text-center">Pridať produkt</h2>
                            <br>
                            <form action="/create" method="post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"><input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                <label class="form-group">ID:</label>
                                <input type="number" class="form-control" placeholder="ID" name="id">
                                <label>Meno produktu:</label>
                                <input type="text" class="form-control" placeholder="Meno produktu" name="product_name">
                                <label>Cena:</label>
                                <input type="double" class="form-control" placeholder="Cena" name="price">
                                <label>Popis:</label>
                                <input type="text" class="form-control" placeholder="Stručný popis" name="description">
                                <label>Počet na sklade:</label>
                                <input type="number" class="form-control" placeholder="Vložte počet kusov na sklade" name="number_in_stock"><br>
                                <button type="submit" value="Pridaj produkt" class="btn btn-primary">Pridaj</button>
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