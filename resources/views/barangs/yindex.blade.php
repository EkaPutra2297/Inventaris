<!doctype html>
<html lang="en">
  <head>
    <title>Barang</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
      <br>
      @if (Session::has('success'))
      <p class= "alert alert-success">{{session::get('success')}} </p>
      @endif
      <br/> 

      <br/>
      <a class="btn btn-primary" href="{{ url('y/create')}}"> Tambah</a>
      <br/>
    <table class="table table-bordered">
        <tr>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Supplier</th>
            <th colspan ="2" > Aksi</th>
        </tr>
            @foreach ($datas as $value)
                <tr>
                    <td>{{$value->Nama_Barang}}</td>
                    <td>{{$value->Jumlah}}</td>
                    <td>{{$value->Harga}}</td>
                    <td>{{$value->Supplier}}</td>
                    <td><a class="btn btn-warning" href="{{url ('y/'.$value->id .'/edit')}}"> Edit</a></td>
                    <td>
                        <form action="{{url('y/'.$value->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>

                        </form>
                    </td>
                 </tr>
            @endforeach
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
