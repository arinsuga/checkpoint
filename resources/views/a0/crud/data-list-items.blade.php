<table id="filter" style="width: 100%;" class="table table-hover-pointer table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th style="width: 90%;">User Name</th>
            <th style="width: 7%;">Email</th>
            <th style="width: 3%;">Status</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr onclick="window.location.assign('{{ route('UserAdmin.show', ['UserAdmin' => $item->id]) }}');">
                <td><a href="{{ route('UserAdmin.show', ['UserAdmin' => $item->id]) }}"><i class="fas fa-lg fa-search"></i></a>&nbsp;&nbsp;  {{ $item->name }} &nbsp;&nbsp; {{ $item->email_verified_at }} </td>
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
