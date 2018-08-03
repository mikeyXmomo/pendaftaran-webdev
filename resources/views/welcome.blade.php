<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Selamat Datang di WEB DEV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="bg-purple">

    <div class="stars">
        <div class="objects">
            <img class="object_rocket_1" src="{{asset('img/rocket.svg')}}" width="40px">
            <div class="earth-moon">
                <img class="object_earth" src="{{asset('img/earth.svg')}}" width="100px">
                <img class="object_moon" src="./img/moon.svg" width="80px">
            </div>
            <div class="box_astronaut">
                <img class="object_astronaut" src="{{asset('img/astronaut.svg')}}" width="140px">
            </div>
        </div>
        <div class="glowing_stars">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>

    </div>

    <h1 class="title">Form Pendaftaran WEB DEV 2018</h1>
    @if(session()->has('success'))
    <script>
        swal({
            icon: 'success',
            title: '{{session()->get('success')}}',
            text: 'First, solve the problem. Then, write the Code',
            timer: 2000,
        })
    </script>
    @endif

    <div class="cont_principal">
        <div class="cont_centrar">
            <div class="cont_login">
                <form action="{{url('/')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="cont_text_inputs">
                        <input type="text" class="input_form_sign d_block active_inp" placeholder="Nama Lengkap" name="nama" />
                        <input type="number" class="input_form_sign d_block active_inp" placeholder="NRP" name="nrp" />
                        <select name="kelas" class="select_form">
                            <option value="" disabled selected>Kelas</option>
                            <option value="D3 IT A">D3 IT A</option>
                            <option value="D3 IT B">D3 IT B</option>
                            <option value="D4 IT A">D4 IT A</option>
                            <option value="D4 IT A">D3 IT B</option>
                        </select>
                        <input type="email" class="input_form_sign d_block active_inp" placeholder="Email" name="email" />
                        <input type="number" class="input_form_sign d_block active_inp" placeholder="Nomor Whatsapp" name="no_wa" />
                        <input type="text" class="input_form_sign d_block active_inp" placeholder="ID Line" name="id_line" />

                    </div>
                    <div class="cont_btn">
                        <button class="btn_sign">Bergabung Ke Web Dev </button>
                    </div>

                </form>
            </div>

        </div>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>


</html>
