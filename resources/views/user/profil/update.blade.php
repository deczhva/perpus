@extends('layouts.user')

@section('content')
    <div class="container">
        @if (Session('status'))
        <div class="alert alert-{{ session('status') }}" role="alert"></i>
         <strong>{{ session('message') }}</strong>
     </div>
        @endif

        <center class="mb-5">
            <img src="/img/{{ Auth::user()->foto == null ? 'profile.jpg' : Auth::user()->foto }}" class="rounded-circle" style="width: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt="Avatar" />
        </center>

    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="card-header">
            <h4>Update Profil</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('user.profil.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <table class="table table-stripped bordered">
                   <tr>
                      <th>Foto</th>
                      <td>
                         <input type="file" name="foto" class="form-control">
                         </td>
                   </tr>
                   <tr>
                      <th>Nama Lengkap</th>
                      <td>
                         <input  class="form-control" type="text" name="fullname" value="{{ Auth::user()->fullname }}">
                      </td>
                   </tr>
                   <tr>
                      <th>Username</th>
                      <td>
                         <input  class="form-control" type="text" name="username" value="{{ Auth::user()->username }}">
                      </td>
                   </tr>
                   <tr>
                      <th>Password</th>
                      <td>
                         <input  class="form-control" type="password" name="password" placeholder="sandi belum di ubah">
                      </td>
                   </tr>
                   <tr>
                      <th>NIS</th>
                      <td>
                         <input  class="form-control" type="text" name="nis" value="{{ Auth::user()->nis }}">
                         {{-- <input  class="form-control" type="hidden" name="kode" value="{{ Auth::user()->kode }}"> --}}
                      </td>
                   </tr>
                   
                   <tr>
                      <th>Alamat</th>
                      <td>
                         <textarea  class="form-control" name="alamat">{{ Auth::user()->alamat }}</textarea>
                      </td>
                   </tr>
                   <tr>
                      <th>Kelas</th>
                      <td>
                         <input  class="form-control" type="text" name="kelas" value="{{ Auth::user()->kelas }}">
                      </td>
                   </tr>
                </table>
                <div class="text-end">
                   
                   <button class="btn btn-outline-warning" type="submit" style="box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);">simpan</button>
                </div>
             </form>
        </div>
    </div>
    </div>
@endsection