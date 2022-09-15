<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK SERTIFIKAT PESERTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        h2{
			position: absolute;
			left: 700px;
			top: 370px;
			color: black;
            font-family: 'Courier New';
		}

        table tr .text2 {
            text-align: left;
        }
        table tr .text3 {
            text-align: center;
            /* font-size: 18px; */
        }
        table tr td {
            text-align: justify;
            font-size: 15px;
        }
        table tr .text {
            text-align: right;
            font-size: 15px;
        }
        @page {
            size: auto;
            margin: 0;
        }
    </style>
</head>

<body>
    <center>
    <img src="{{ asset('img/sertif.png')}}" class="align-center img-responsive">
    <h2>
        <div class="form-group">
            {{ $admin->name }}
        </div>
    </h2>
    </center>
    <div class="container-lg text-center mt-4 mb-4 pt-4">
        <button name="cetak" type="button" id="cetak" value="Cetak" onclick="Cetakan()" class="btn btn-primary" style="margin-right: 4cm;">cetak</button>
        <a href="{{ url('sertifikat') }}" name="kembali" id="kembali" class="btn btn-success">Kembali</a>
    </div>
    <script>
        function Cetakan() {
            var x = document.getElementsByName("cetak");
            var y = document.getElementsByName("kembali");
            for (i = 0; i < x.length; i++) {
                x[i].style.visibility = "hidden";
            }
            for (i = 0; i < y.length; i++) {
                y[i].style.visibility = "hidden";
            }
            var css = '@page { size: landscape; }',
                head = document.head || document.getElementsByTagName('head')[0],
                style = document.createElement('style');
            style.type = 'text/css';
            style.media = 'print';
            if (style.styleSheet) {
                style.styleSheet.cssText = css;
            } else {
                style.appendChild(document.createTextNode(css));
            }
            head.appendChild(style);
            window.print(); //fitur print
            for (i = 0; i < x.length; i++) {
                x[i].style.visibility = "visible";
            }
            for (i = 0; i < y.length; i++) {
                y[i].style.visibility = "visible";
            }
        }
    </script>
</body>

</html>
