<!DOCTYPE html>
<html>
<head>
  <title>RoleUsers (Index)</title>
  <link rel="stylesheet"
  href="{{ asset('css/app.css') }}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('role_users') }}">RoleUsers Alert</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ URL::to('role_users') }}">View All RoleUsers</a></li>
      <li><a href="{{ URL::to('role_users/create') }}">Add a RoleUser</a></li>
    </ul>
    </nav>
    <h1>All the RoleUsers</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>User ID</th>
          <th>Role ID</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>

        @foreach($role_users as $value)
        <tr>
          <td>{{ $value->user_id }}</td>
          <td>{{ $value->role_id }}</td>
          <td>{{ $value->created_at }}</td>
          <td>{{ $value->updated_at }}</td>
          <!-- we will also add show, edit, and delete buttons -->
          <td>
            <!-- delete the order (uses the destroy method DESTROY /orders/{id} -->
            {{ Form::open(array('url' => 'role_users/' . $value->id, 'class' => 'pull-right')) }}
              {{ Form::hidden('_method', 'DELETE') }}
              {{ Form::submit('Delete this RoleUser', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}

            <!-- Show the order (uses the show method found at GET /orders/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('role_users/' . $value->id) }}">Show this RoleUser</a>
            <!-- Edit this order (uses the edit method found at GET /orders/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('role_users/' . $value->id . '/edit') }}">Edit this RoleUser</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
