<table class="table table-bordered table-striped table-fixed-header">
    <thead>
        <tr>
            <th>Horário</th>
            @foreach ($days as $day)
                <th class="text-center">{{ $day->format('d/m') }}<br/>{{ $day->format('l') }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($period as $p)
            <tr>
                <td width="50">{{ $p->format('H:i:s') }}</td>
                @foreach ($days as $day)
                    <th></th>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>