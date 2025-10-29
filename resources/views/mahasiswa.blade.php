<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
</head>
<body>
    <table class="table">
        <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">NIM</th>
        <th scope="col">Program Studi</th>
        <th scope="col">Email</th>
        <th scope="col">Nohp</th>
        <th scope="col">AKSI</th>
    </tr>
</thead>
<tbody>
    <?php $i=1?>
    @foreach ($data as $mahasiswa)
    <tr>
        <th scope="row"><?php echo $i?></th>
        <td>{{$mahasiswa["name"]}}</td>
        <td>{{$mahasiswa["nim"]}}</td>
        <td>{{$mahasiswa["prodi"]}}</td>
        <td>{{$mahasiswa["email"]}}</td>
        <td>{{$mahasiswa["nohp"]}}</td>
        <td>
        <button type="button" class="btn btn primary">EDIT</button>
        <button type="button" class="btn btn danger">HAPUS</button>
</td>
<?php $i++?>
    </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection