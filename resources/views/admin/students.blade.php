<x-app-layout>
<div class="container">
<h3>Register Student</h3>

<form method="POST" action="{{ route('admin.students.store') }}">
@csrf
<input class="form-control mb-2" name="full_name" placeholder="Full Name">
<input class="form-control mb-2" name="phone" placeholder="Phone">
<input class="form-control mb-2" name="email" placeholder="Email">
<input class="form-control mb-2" name="course" placeholder="Course">

<select class="form-control mb-2" name="level">
  <option>Certificate</option>
  <option>Diploma</option>
</select>

<button class="btn btn-success">Save</button>
</form>
</div>
</x-app-layout>
