<table id="filter" class="table table-hover table-head-fixed text-nowrap">
    <thead>
    <tr>
        <th>User Name</th>
        <th>Email</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    @switch($item->disabled)
                        @case(0)
                            <span class="badge badge-success">Aktif</span>
                            @break
                        @default
                            <span class="badge badge-danger">Disabled</span>
                            @break
                    @endswitch
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
