<table id="filter" class="table table-hover-pointer table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Dept</th>
            <th>Tanggal</th>
            <th><div>Waktu</div> <div>Checkin</div></th>
            <th>Lokasi Checkin</th>
            <th><div>Waktu</div> <div>Checkout</div></th>
            <th>Lokasi Checkout</th>
            <th><div>Lama</div> <div>Kerja</div></th>
        </tr>
    </thead>
    <tbody>

        @if ($viewModel->data)
            @foreach ($viewModel->data as $item)
                <tr>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->user->dept }}</td>
                    <td>{{ \Arins\Facades\Formater::dateMonth($item->attend_dt) }}</td>
                    <td>{{ \Arins\Facades\Formater::time($item->checkin_time) }}</td>
                    <td>{{ $item->checkin_city }}</td>
                    <td>{{ \Arins\Facades\Formater::time($item->checkout_time) }}</td>
                    <td>{{ $item->checkout_city }}</td>
                    <td>
                        {{ $item->checkin_time->diffInHours($item->checkout_time) }}:{{ $item->checkin_time->diff($item->checkout_time)->format('%I:%S') }}
                    </td>
                </tr>
            @endforeach
        @endif

    </tbody>
</table>
