@extends('user.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Biodata Pemandu</h1>
    </div>
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>CV</th>
                        <th>Detail</th>
                    </tr>
                    @foreach ($registrations as $registration)
                    @if ($registration->status == 'Diterima' || $registration->status == 'Pending')
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $registration->nama }}</td>
                            <td>
                                @if ($registration->gambar)
                                <a href="{{ asset('gambar/' . $registration->gambar) }}" target="_blank">Lihat gambar
                                </a>
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $registration->status }}</td>       
                            <td>
                                @if($registration->cv)
                                    <a href="{{ asset('cv/'. $registration->cv) }}" target="_blank">Download CV</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="text-center"><a href="{{url ("peta/pemanduwisata/$registration->nama")}}" class="btn btn-info">Detail</a></td>           
                        </tr>
                    @endif
                @endforeach

                </table>
            </div>
        </div>
    </div>

@endsection