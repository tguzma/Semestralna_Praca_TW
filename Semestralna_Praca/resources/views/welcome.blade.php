<x-guest-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Vitajte!') }}
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
            <div class="row align-items-center">
              <h1 class="display-4 text-center">Internetový obchod s domácimy potrebami</h1>
              <p class="lead text-center">
                Pre objednanie produktu musíte mať vytvorený účet!
              </p>
              <h1 class="display-6 text-left">Naše produkty:</h1>

              <table class="table table-striped col-sm-6">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Názov produktu</th>
                    <th scope="col">Cena produktu (€)</th>
                    <th scope="col">Popis</th>
                    <th scope="col">Počet na sklade</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <th scope="col">{{$product['id']}}</th>
                    <th scope="col">{{$product['product_name']}}</th>
                    <th scope="col">{{$product['price']}}</th>
                    <th scope="col">{{$product['description']}}</th>
                    <th scope="col">{{$product['number_in_stock']}}</th>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

          </body>

          </html>
        </div>
      </div>

    </div>

  </div>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 row align-items-center">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Prihlásenie</h5>
            <p class="card-text">Tu sa môžte prihlásiť ak ste už zaregistrovaný</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Prihlásiť sa</a>
          </div>
        </div>
      </div>

      
      <div class="col-sm-4 ">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Registrácia</h5>
            <p class="card-text">Tu sa môžte zaregistrovať ak ešte nemáte účet</p>
            <a href="{{ route('register') }}" class="btn btn-primary">Registrovať</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-guest-layout>