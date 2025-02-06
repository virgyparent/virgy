<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('/store')}}" method="POST">
        @csrf
        <label for="name">Nama Kamar:</label><br>
        <input type="text" name="name" id="name"><br>

        <label for="no_kamar">No Kamar:</label><br>
        <input type="text" name="no_kamar" id="no_kamar"><br>

        <label for="lantai">Lantai</label><br>
        <input type="text" name="lantai" id="lantai">

        <button type="submit">Tambah Data Kamar</button>
    </form>

</body>

</html>