<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
</head>

<style>
    h1,
    h3,
    h5,
    h6 {
        text-align: center;
        padding-right: 200px;
    }

    .row {
        margin-top: 20px;
    }

    .keclogo {
        font-size: 24px;
        font-size: 3vw;
    }

    .kablogo {
        font-size: 2vw;
    }

    .alamatlogo {
        font-size: 1.5vw;
    }

    .kodeposlogo {
        font-size: 1.7vw;
    }

    #tls {
        text-align: right;
    }

    .alamat-tujuan {
        margin-left: 50%;
    }

    .garis1 {
        border-top: 3px solid black;
        height: 2px;
        border-bottom: 1px solid black;
    }

    #logo {
        margin: auto;
        margin-left: 50%;
        margin-right: auto;
    }

    #tempat-tgl {
        margin-left: 120px;
    }

    #camat {
        text-align: center;
    }

    #nama-camat {
        margin-top: 100px;
        text-align: center;
    }
</style>

<body>
    <div>
        <header>
            <div class="row">
                <div id="text-header" class="col-md-12">
                    <h3 class="kablogo">Pajar Portofolio Website</h3>
                </div>
            </div>
        </header>

        <div class="container">
            <hr class="garis1" />
            <div id="alamat" class="row">
                <div id="lampiran" class="col-md-6">
                    Pengirim : {{ $data['name'] }}<br />
                    Email : {{ $data['email'] }}<br />
                </div>
                <div id="tgl-srt" class="col-md-6">
                    <p id="tls">Bogor, {{ date('l, j F Y') }}</p>
                    </p>
                </div>
            </div>
            <div id="pembuka" class="row">&emsp; &emsp; &emsp; {{ $data['message'] }}:</div>
        </div>
    </div>

</body>

</html>
