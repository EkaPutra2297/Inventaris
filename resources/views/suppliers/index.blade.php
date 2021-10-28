<!doctype html>
<html lang="en">
  <head>
    <title>Suppliers</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      {{-- saya jelasin dikit kalo kamu mau make bootstrap pastiin page nya isi bootstrap js dll 
      kalo mau cepet udah saya installin addon bootstrap tinggal ketik b4- nah di situ banyak pilihannya bisa pilih 
      1 1 mau make apa ini contoh b4-table langsung dibikinin table otomatis biar gampang
       --}}

      {{-- <table class="table">
          <thead>
              <tr>
                  <th></th>
                  <th></th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td scope="row"></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td scope="row"></td>
                  <td></td>
                  <td></td>
              </tr>
          </tbody>
      </table> --}}

      <br>
      @if (Session::has('success'))
      <p class= "alert alert-success">{{session::get('success')}} </p>
      @endif
      <br/> 

      <br/>
      <a class="btn btn-primary" href="{{ url('x/create')}}"> Tambah</a>
      <br/>
    <table class="table table-bordered">
        <tr>
            <th>Nama Lengkap</th>
            <th>No HP / Wa</th>
            <th>Alamat</th>
            <th colspan ="2" > Aksi</th>
        </tr>
        {{-- sebenernya dak perlu $key==>value gitu value aja cukup --}}
            @foreach ($datas as $value)
                <tr>
                    <td>{{$value->Nama}}</td>
                    <td>{{$value->No_HP_WA}}</td>
                    <td>{{$value->Alamat}}</td>
                    <td><a class="btn btn-warning" href="{{url ('x/'.$value->id .'/edit')}}"> Edit</a></td>
                    <td>
                        <form action="{{url('x/'.$value->id) }}" method="POST">
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
