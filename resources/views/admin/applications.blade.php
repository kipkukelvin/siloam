<table class="table table-bordered">
<tr>
<th>Name</th><th>Course</th><th>Status</th><th>Docs</th><th>Action</th>
</tr>

@foreach($applications as $app)
<tr>
<td>{{ $app->full_name }}</td>
<td>{{ $app->course->name }}</td>
<td>{{ $app->status }}</td>
<td>
<a href="{{ asset('storage/'.$app->id_scan) }}">ID</a> |
<a href="{{ asset('storage/'.$app->academic_certificates) }}">Certs</a>
</td>
<td>
@if($app->status=='Pending')
<form method="POST" action="/admin/applications/{{ $app->id }}/approve">@csrf
<button class="btn btn-success btn-sm">Approve</button>
</form>
<form method="POST" action="/admin/applications/{{ $app->id }}/reject">@csrf
<button class="btn btn-danger btn-sm">Reject</button>
</form>
@endif
</td>
</tr>
@endforeach
</table>
