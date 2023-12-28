<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Data Pondok Syafa'aturrasul</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1 class="text-center mb-9">DATA PONDOK SYAFA'ATURRASUL</h1>
    <div class="container">
        <a href="/tambahdata" class="btn btn-success">Tambah Data +</a>
        <div class="row">  
            @if ($message = Session::get('succes'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
              </div>
            @endif  
        <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">NO TELPON</th>
                    <th scope="col">Di Buat</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;  
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th> 
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>0{{ $row->notelpon }}</td>
                        <td>{{ $row->created_at->format('d-M-Y') }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                            <a href="/delete/{{ $row->id }}" class="btn btn-warning">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>