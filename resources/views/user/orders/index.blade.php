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
                <form method="POST" action="{{ url("orders/$order->nama") }}">
                  @csrf
                  @method('PUT')
                    <button type="submit" class="btn btn-success">Terima</button>
                </form>
                <form action="{{ url('orders/' . $order->nama) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button
                      type="submit" class="btn btn-danger"
                      onclick="return confirm('Are you sure you want to reject this orders?')">Tolak</button>
              </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection