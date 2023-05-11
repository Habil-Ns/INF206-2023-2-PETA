@extends('user.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Orders</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Umur</th>
              <th scope="col">No Hp</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $order->nama}}</td>
              <td>{{ $order->umur}}</td>
              <td>{{ $order->nohp}}</td>
              <td>{{ $order->gender}}</td>
              <td>{{ $order->status }}</td>
              <td class="d-flex gap-2">
                @if ($order->status == 'Diproses')
                <form method="POST" action="{{ route('orders.selesai', ['nama' => $order->nama]) }}">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success btn-terima_wisatawan" style="font-family:'Patua One'; font-weight: 400;">Selesai</button>
                </form>
                @else
                    <form method="POST" action="{{ route('orders.terima', ['nama' => $order->nama]) }}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success btn-terima_wisatawan" style="font-family:'Patua One'; font-weight: 400;">Terima</button>
                    </form>
                @endif            
                <form action="{{ url('orders/' . $order->nama) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button
                      type="submit" class="btn btn-danger btn-tolak_wisatawan" 
                      onclick="return confirm('Apakah kamu yakin ingin menolak pesanan?')" style="font-family:'Patua One'; font-weight: 400;">Tolak</button>
              </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection