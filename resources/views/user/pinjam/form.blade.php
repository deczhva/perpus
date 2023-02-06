@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header">
                    <h3>Form Peminjaman</h3>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="fullname" value="{{ Auth::user()->fullname }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Peminjaman</label>
                                <input type="date" class="form-control" name="tanggal_peminjaman" value="{{ date('Y-m-d') }}" readonly>
                            </div>
             
             
                            <div class="mb-3">
                                 <label for="">Pilih Buku</label>
                                 <select name="buku_id" id="" class="form-select">
                                     <option value="" disabled selected>Pilih Opsi</option>
                                     @foreach($buku as $b)
                                     <option value="{{ $b->id }}" {{ isset($buku_id) ? $buku_id == $b->id ? "selected" : "" : "" }}>{{ $b->judul }}</option>
                                     @endforeach
                                 </select>
                            </div>
             
                            <div class="mb-3">
                                <label for="">Kondisi buku</label>
                                <select class="form-select" name="kondisi_buku_saat_dipinjam">
                                    <option value="" disabled selected >Pilih Opsi</option>
                                    <option value="baik">Baik</option>
                                    <option value="rusak">Rusak</option>
                                </select>  
                            </div>
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                <button type="submit" class="btn btn-outline-warning mt-3" style="box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection