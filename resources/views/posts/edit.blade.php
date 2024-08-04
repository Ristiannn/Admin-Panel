<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Manage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: darkblue">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label class="font-weight-bold">FORM TRANSAKSI</label>
                            </div>
                            <div class="form-group">
                                <label class="font-weight">Nomor Transaksi</label>
                                <!--input type="text" class="form-control" name="no" id="no" readonly value=-->
                            </div>
                            <div class="form-group">
                                <label class="font-weight">Tanggal Transaksi</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Datepicker">
                            </div>

                            <div class="form-group">
                                <label class="font-weight">Data Customer</label>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Nama">  
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Alamat">  
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Phone">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight">Pilih Barang</label>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Option Barang">  
                                </div>
                                <div class="form-group col-md-1">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Qty">  
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Subtotal">  
                                </div>
                                <div class="form-group col-md-3">
                                    <button type="tambah" class="btn btn-outline-primary">Tambah Barang</button>  
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight">Data Barang</label>
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                </table>
                            </div>

                            <div class="form-group">
                                <label class="font-weight">Total Transaksi:</label>
                            </div>

                            <button type="submit" class="btn btn-outline-primary">Simpan Transaksi</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>