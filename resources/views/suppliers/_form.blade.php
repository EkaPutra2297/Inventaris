<!doctype html>
<html lang="en">
  <head>
    <title>Supplier</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="row clearfix">
        <div class="col-md-2">Nama Lengkap</div>
        
        <div class="col-md-3">
            <input class="form-control" type="text" name="Nama" value="{{ $model->Nama }}"> 
            @foreach($errors->get('Nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>
    </div>
    
    <div class="row clearfix">
        <div class="col-md-2">No HP / WA</div>
        
        <div class="col-md-3">
            <input class="form-control"  type="text" name="No_HP_WA" value="{{ $model->No_HP_WA }}">
            @foreach($errors->get('No_HP_WA') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>
    </div>
    
    <div class="row clearfix">
        <div class="col-md-2">Alamat</div>
        
        <div class="col-md-3">
            <input class="form-control"  type="text" name="Alamat"  value="{{ $model->Alamat }}">
            @foreach($errors->get('Alamat') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">SIMPAN</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
