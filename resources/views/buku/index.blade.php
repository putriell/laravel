<table class="table table-striped" border="1">
    <thead>
        <tr>
            <th> id </th>
            <th> Judul Buku </th>
            <th> Penulis </th>
            <th> Harga </th>
            <th> Tgl. terbit </th>
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_buku as $buku)
            <tr>
                <td> {{ ++$no }} </td>
                <td> {{ $buku -> judul }} </td>
                <td> {{ $buku -> penulis }} </td>
                <td> {{ "Rp".number_format($buku->harga, 2, ',', '.' ) }} </td>
                <td> {{ $buku -> tgl_terbit ->format('d/m/Y') }} </td>
            </tr>
        @endforeach
    </tbody>
</table>

<h4> Jumlah data yang dimiliki: {{$buku-> count('id') }} </h4>
<h4> Jumlah total dari semua harga buku: {{ "Rp".number_format($buku -> sum('harga'))}}</h4>

<p align="left"><a href="{{ route('buku.create') }}"> Tambah buku</a></p>
<td>
    <form action="{{ route('buku.destroy', $buku->id)}}" method="post">
    @csrf
    <button onclick="return confirm('yakin untuk menghapus?')"> Hapus </button>
    </form>
</td>