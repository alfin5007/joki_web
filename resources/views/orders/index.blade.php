<!DOCTYPE html>
<html>
<head>
    <title>Data Order</title>
</head>

<body>

    <h1>Data Order</h1>

    <a href="{{ route('orders.create') }}">
        + Tambah Order
    </a>


    <br><br>


    @if(session('success'))
        <p>
            {{ session('success') }}
        </p>
    @endif


    <table border="1" cellpadding="10">

        <tr>
            <th>No</th>
            <th>Nama Klien</th>
            <th>Layanan</th>
            <th>Jumlah</th>
            <th>Harga Awal</th>
            <th>Aksi</th>
        </tr>


        @foreach($orders as $order)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $order->nama_klien }}</td>

            <td>{{ $order->layanan }}</td>

            <td>{{ $order->jumlah }}</td>

            <td>{{ $order->harga_awal }}</td>


            <td>

                <a href="{{ route('orders.edit', $order->id) }}">
                    Edit
                </a>


                <form action="{{ route('orders.destroy', $order->id) }}" 
                      method="POST" 
                      style="display:inline;">

                    @csrf
                    @method('DELETE')


                    <button type="submit">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach


    </table>


</body>
</html>