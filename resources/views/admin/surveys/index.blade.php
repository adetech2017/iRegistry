<h2>All Submitted Surveys</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>MDA</th>
        <th>Email</th>
        <th>Printers</th>
        <th>Actions</th>
    </tr>
    @foreach($surveys as $survey)
    <tr>
        <td>{{ $survey->name }}</td>
        <td>{{ $survey->mda }}</td>
        <td>{{ $survey->email }}</td>
        <td>{{ $survey->printers_count }}</td>
        <td>
            <a href="{{ url('/survey/'.$survey->id.'/print') }}">Print</a> |
            <a href="{{ url('/survey/'.$survey->id) }}">View</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $surveys->links() }}
