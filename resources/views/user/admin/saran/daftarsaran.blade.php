@extends('user.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Saran</h1>
    </div>
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-body table-responsive">
                <table class="table table-bordered text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Komentar</th>
                    </tr>
                    @foreach ($sarans as $saran)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $saran->nama }}</td>
                        <td>{{ $saran->email }}</td>
                        <td>{{ $saran->komentar }}</td>
                        <td>
                            <form action="{{ route('saran.destroy', ['nama' => $saran->nama]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this row?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection