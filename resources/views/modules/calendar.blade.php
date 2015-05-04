<table class="table table-bordered table-striped table-fixed-header">
    <thead>
        <tr>
            <th>Horário</th>
            @foreach ($days as $day)
                <th>{{ $day->format('m/d') }}<br/>{{ $day->format('l') }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($period as $p)
            <tr>
                <td>{{ $p->format('H:i:s') }}</td>
                @foreach ($days as $day)
                    <th></th>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>