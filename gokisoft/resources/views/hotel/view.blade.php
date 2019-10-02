<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Ma Phong</th>
            <th>Loai Phong</th>
            <th>Tang</th>
            <th>Gia tien</th>
        </tr>
        </thead>
        <tbody>
        @php
            $index = 1;
        @endphp
        @foreach($hotelList as $item)
            <tr>
                <td>{{ $index++ }}</td>
                <td>{{ $item->maP }}</td>
                <td>{{ $item->loaiP }}</td>
                <td>{{ $item->tang }}</td>
                <td>{{ $item->gia }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>