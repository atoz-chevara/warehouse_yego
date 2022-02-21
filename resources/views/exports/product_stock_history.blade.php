<table>
    <thead>
        <tr>
            <th></th>
            <th>Nama Mitra</th>
            <th colspan="2">:</th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th>Alamat</th>
            <th colspan="2">:</th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th>Nama Brand</th>
            <th colspan="2">:</th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
</table>

<table>
    <thead>
        <tr>
            <th style="text-align: center; border-left: 2rem solid #000; border-top: 2rem solid #000;">NO</th>
            <th style="text-align: center; border-top: 2rem solid #000;">KODE BARANG</th>
            <th style="text-align: center; border-top: 2rem solid #000;">ITTEM/NAMA BARANG</th>
            <th style="text-align: center; border-top: 2rem solid #000;">QTY</th>
            <th style="text-align: center; border-right: 2rem solid #000; border-top: 2rem solid #000;">KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
        <tr>
            <td style="text-align: center; border-left: 2rem solid #000; {{$loop->last ? 'border-bottom: 2rem solid #000;':''}}">{{$loop->iteration}}</td>
            <td style="text-align: center; {{$loop->last ? 'border-bottom: 2rem solid #000;':''}}">{{$row->product_code}}</td>
            <td style="text-align: center; {{$loop->last ? 'border-bottom: 2rem solid #000;':''}}">{{$row->product_name}}</td>
            <td style="text-align: center; {{$loop->last ? 'border-bottom: 2rem solid #000;':''}}">{{$row->product_amount}}</td>
            <td style="text-align: center; border-right: 2rem solid #000; {{$loop->last ? 'border-bottom: 2rem solid #000;':''}}"></td>
        </tr>
        @endforeach
    </tbody>
</table>

<table>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center;">Checker</td>
            <td></td>
            <td style="text-align: center;">Checker</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center;">( . . . . . . . . . . .)</td>
            <td></td>
            <td style="text-align: center;">( . . . . . . . . . . .)</td>
            <td></td>
        </tr>
    </tbody>
</table>