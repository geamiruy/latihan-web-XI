<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        h3 {
            text-align: center;
            margin-top: 30px;
            color: #343a40;
        }

        table {
            margin-top: 30px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #343a40;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            border-radius: 20px;
            padding: 5px 15px;
            transition: background-color 0.3s ease;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        td, th {
            vertical-align: middle;
        }
    </style>
    <title>Tampil Pegawai</title>
</head>
<body>
    <h3>Tampil Pegawai</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA PEGAWAI</th>
                <th>NIK</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <th>JABATAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_pegawai = mysqli_query($conn, "select * from tabel_pegawai");
            $no = 0;
            while ($data_pegawai = mysqli_fetch_array($qry_pegawai)) {
                $no++;
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_pegawai['nama'] ?></td>
                    <td><?= $data_pegawai['nik'] ?></td>
                    <td><?= $data_pegawai['alamat'] ?></td>
                    <td><?= $data_pegawai['jenis_kelamin'] ?></td>
                    <td><?= $data_pegawai['id_jabatan'] ?></td>
                    <td><a href="ubah.php?id=<?= $data_pegawai['id'] ?>" class="btn btn-success">Ubah</a> | <a
                            href="hapus_pegawai.php?id=<?= $data_pegawai['id'] ?>"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                            class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>