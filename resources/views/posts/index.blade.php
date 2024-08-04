<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Manage Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: darkblue">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <label class="font-weight-bold">TRANSAKSI PENJUALAN</label>
                        <div class="form-group">
                            <label class="font-weight">Filter Tanggal Transaksi</label>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Datepicker">  
                            </div>
                            <div class="form-group col-md-1">
                                <label class="font-weight">sd</label>  
                            </div>
                            <div class="form-group col-md-2">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Datepicker">
                            </div>
                            <div class="form-group col-md-2">
                                <button type="tambah" class="btn btn-outline-primary"></button>
                            </div>
                            <p><a href="{{ route('posts.create') }}" class="btn btn-outline-success">Tambah Transaksi</a></p>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Search">  
                            </div>
                            <p><a class="btn btn-outline-success">Export Excel</a></p>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nomor Transaksi</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Total Transaksi</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/posts/').$post->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{!! $post->content !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <p><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-primary">EDIT</a></p>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}');

        @elseif(session()->has('warning'))
        
        toastr.warning('{{ session('warning') }}');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}'); 
            
        @endif
    </script>

</body>
</html>