<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Styles --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c5cc81e3e.js" crossorigin="anonymous"></script>
    <link rel="icon"
        href="https://previews.dropbox.com/p/thumb/AAxUl028BilRiZRynXeEYQP6LgpMIsnfHMQLqiIJl8trGZrkrVsGvcjkW4PIuiHPbpSg7PrX2EEUtPxj7RyYCJPbfo8wtkgzdJaBm8TZV7EIV9huhO0CTQRd5ZDhX_TBHuT1N-CX5Lbkc3XoerdciUnPQkYbK5CSJMlBSeGBgwjLnLnq1Fh9KD5m0KUP-CsyS3Xxvelf0CqxEuWRrc2NrlcLXfvxZFZqiEIVBE7kCsEyG3axb7MUMWOVp4Q4b22GliUFpleKC8dZmRypxzxMhfHc_w0yNtIkG9qNmNpsr9fQ45ZCZL-MztesWFlY68kYlsj9V2fx_8z8kJmxCcvPE86Vzekjfn5OJT1d0OJsvjlP9g/p.png?fv_content=true&size_mode=5" " type="
        image/icon type">

    {{-- Title --}}
    <title>@yield('title')</title>
</head>

<body>

    <div id="app">
        <navbar></navbar>

        <section class="py-5">
            <div class="container">
                @yield('content')
            </div>
        </section>

    </div>


    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>