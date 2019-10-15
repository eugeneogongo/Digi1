<div class="table-responsive">
    <table class="table" id="incidences-table">
        <thead>
            <tr>
                <th>Details</th>
        <th>Route No</th>
        <th>Route</th>
        <th>Noplate</th>
        <th>Sacco</th>
        <th>Problem</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($incidences as $incidence)
            <tr>
                <td>{!! $incidence->details !!}</td>
            <td>{!! $incidence->route_no !!}</td>
            <td>{!! $incidence->route !!}</td>
            <td>{!! $incidence->noplate !!}</td>
            <td>{!! $incidence->sacco !!}</td>
            <td>{!! $incidence->problem !!}</td>
                <td>
                    {!! Form::open(['route' => ['incidences.destroy', $incidence->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('incidences.show', [$incidence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('incidences.edit', [$incidence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
