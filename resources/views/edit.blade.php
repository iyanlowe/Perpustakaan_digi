<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Tutorial CRUD Laravel</h4>
            </div>
            <div class="panel-body">
                <form action="{{route('update', $book->id)}}" method="post">
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" value="{{$book->judul_buku}}" name="judul_buku" id="judul" class="form-control">
                    </div>  
                    <div class="form-group" >
                         <label for="judul">Nama Penerbit</label>
                       <select name="pencipta_buku_by_id">
                           <option value="1">Penerbit 1</option>
                           <option value="2">Penerbit 2</option>
                           <option value="3">Penerbit 3</option>
                       </select>
                    </div>                    
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>