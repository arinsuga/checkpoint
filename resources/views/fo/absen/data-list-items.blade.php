<input type="hidden" name="username" id="username" value="{{ $viewModel->data->user->name }}">
<table id="filter" class="table table-hover-pointer table-head-fixed">
    <thead>
        @if (isset($viewModel->data->user))
        <tr style="border: none;">
            <td colspan="4">
            <strong>Nama : {{ $viewModel->data->user->name }}</strong>
            </td>
        </tr>
        @endif

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
                <tr onclick="window.location.assign('{{ route('absen.show', ['absen' => $item->id]) }}');">
                    <td>{{ $item->attend_dt }}</td>
                    <td>
                        <div>
                            <div><strong>Waktu</strong></div>
                            <div>{{ $item->checkin_time }}</div>
                        </div>
                        <div>
                            <div><strong>Deskripsi</strong></div>
                            <div>{{ $item->checkin_description }}</div>
                        </div>
                        <div>
                            <div><strong>Lokasi</strong></div>
                            <div>{{ $item->checkin_address }}</div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <div><strong>Waktu</strong></div>
                            <div>{{ $item->checkout_time }}</div>
                        </div>
                        <div>
                            <div><strong>Deskripsi</strong></div>
                            <div>{{ $item->checkout_description }}</div>
                        </div>
                        <div>
                            <div><strong>Lokasi</strong></div>
                            <div>{{ $item->checkout_address }}</div>
                        </div>
                    </td>
                    <td>{{ $item->time_elapse }}</td>
                </tr>
            @endforeach
        @endif

    </tbody>
</table>
