@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <p>
                <a href="javascript:history.back()" class="btn btn-sm btn-flat btn-primary">Kembali</a>
            </p>
        <div class="box box-warning">
           
            <div class="box-header">
                <h4>{{ $title }}</h4>
            </div>
            <div class="box-body">
                <form role="form" method="post" action="{{ url('profile/buku/'.$dt->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Judul Buku</label>
                            <input type="text" name="judul" value="{{ $dt->judul }}" class="form-control" id="exampleInputEmail1" placeholder="Judul Buku">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Keterangan Buku</label>
                            <textarea class="form-control summernote" name="keterangan" value="Tidak melebihi 255 karakter">{{ $dt->keterangan }}</textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Stock Buku</label>
                            <input type="number" name="stock" value="{{ $dt->stock }}" class="form-control" id="exampleInputEmail1" placeholder="Stock Buku">
                        </div>                    
 
                       
                    </div>
                    <!-- /.box-body -->
 
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 
@endsection