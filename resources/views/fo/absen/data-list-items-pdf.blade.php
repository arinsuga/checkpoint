<table id="filter" class="table table-hover-pointer table-head-fixed">
    <thead>
        <tr>
            <th style="width: 15%;">Tanggal</th>
            <th style="width: 40%;">Checkin</th>
            <th style="width: 40%;">Checkout</th>
            <th style="width: 5%;"><div>Lama</div> <div>Kerja</div></th>
        </tr>
    </thead>
    <tbody>

        @if ($viewModel->data)
            @foreach ($viewModel->data->attend_list as $item)
                <tr>
                    <td>{{ $item->attend_dt }}</td>
                    <td>
                        Waktu : <br>
                        {{ $item->checkin_time }} <br><br>

                        Deskripsi : <br>
                        {{ $item->checkin_description }} <br><br>

                        Lokasi : <br>
                        {{ $item->checkin_address }} <br><br>
                    </td>
                    <td>
                        Waktu : <br>
                        {{ $item->checkout_time }} <br><br>

                        Deskripsi : <br>
                        {{ $item->checkout_description }} <br><br>

                        Lokasi : <br>
                        {{ $item->checkout_address }} <br><br>
                    </td>
                    <td>{{ $item->time_elapse }}</td>
                </tr>
            @endforeach
        @endif

    </tbody>
</table>
