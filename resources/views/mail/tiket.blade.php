<h1>Tiket Pemesanan #{{ $pemesanan->id_tiket }}</h1>

<p>Terima kasih telah memesan tiket di website kami. Berikut adalah detail tiket yang anda pesan:</p>

<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $biodata->nama }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{ $biodata->email }}</td>
    </tr>
    <tr>
        <td>No. Telepon</td>
        <td>:</td>
        <td>{{ $biodata->no_hp }}</td>
    </tr>
    <tr>
        <td>Tanggal Pemesanan</td>
        <td>:</td>
        <td>{{ $pemesanan->created_at }}</td>
    </tr>
</table>