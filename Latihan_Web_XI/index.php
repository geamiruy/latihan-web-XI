<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
        }

        .login-container h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-control {
            border-radius: 5px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .btn-success {
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .txt1 {
            display: block;
            margin-top: 15px;
            text-align: center;
            color: #666;
        }

        .txt2 {
            color: #007bff;
            text-decoration: none;
        }

        .txt2:hover {
            text-decoration: underline;
        }
    </style>
    <title>Login Pegawai</title>
</head>

<body>
    <div class="row" style="margin-top:50px;">
        <div class="col-md"></div>
        <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
            <form action="proses_login.php" method="post">
                <h3 align="center">Login Pegawai</h3>
                NIK:
                <input type="text" name="nik" value="" class="form-control">
                Password:
                <input type="password" name="password" class="form-control"><br>
                <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center>
            </form>
            <span class="txt1">
                Belum Menjadi Pegawai?
            </span>
            <a href="register.php" class="txt2">
                KLIK DI SINI
            </a>
        </div>
        <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
        
</body>

</html>