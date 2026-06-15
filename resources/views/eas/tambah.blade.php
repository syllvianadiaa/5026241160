<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; }

        .header {
            background-color: #1a6fd4;
            color: white;
            padding: 20px 30px;
        }
        .header h1 { font-size: 22px; }
        .header p { font-size: 13px; }

        .content { padding: 20px 30px; }

        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input {
            width: 300px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-simpan {
            background-color: #1a6fd4;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-batal {
            background-color: #aaa;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            margin-left: 8px;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>5026241160 - Sylvia Nadia Maharani</h1>
    <p>Tambah Data Nilai Peserta</p>
</div>

<div class="content">
    <form action="/eas/store" method="POST">
        @csrf
        <div class="form-group">
            <label>No Peserta</label>
            <input type="text" name="nopeserta" placeholder="Masukkan No Peserta">
        </div>
        <div class="form-group">
            <label>Nilai Teori</label>
            <input type="text" name="nilaiteori" placeholder="Masukkan Nilai Teori">
        </div>
        <div class="form-group">
            <label>Nilai Praktik</label>
            <input type="text" name="nilaipraktek" placeholder="Masukkan Nilai Praktik">
        </div>
        <button type="submit" class="btn-simpan">Simpan</button>
        <a href="/eas" class="btn-batal">Batal</a>
    </form>
</div>

</body>
</html>


