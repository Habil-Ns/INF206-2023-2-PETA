@extends('user.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penilaian Pemandu Wisata</h1>
    </div>
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-body">
                @foreach ($registrations as $registration)
                <div class="form-group row">
                    <div class="col-sm-12">
                        <h4>{{ $registration->nama }}</h4>
                    </div>
                    <div class="col-sm-12">
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Penilai</th>
                                <th>Rating</th>
                            </tr>
                            @foreach (DB::table('registrations')
                                ->join('rates', 'registrations.nama', '=', 'rates.pemandu')
                                ->select('rates.namapenilai', 'rates.rate')
                                ->where('registrations.nama', $registration->nama)
                                ->get() as $rating)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rating->namapenilai }}</td>
                                    <td>{{ $rating->rate }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"><strong>Average Rating</strong></td>
                                <td>
                                    <?php
                                        $averageRating = DB::table('rates')
                                            ->where('pemandu', $registration->nama)
                                            ->avg('rate');
                                    ?>
                                    {{ number_format($averageRating, 1) }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>    
@endsection