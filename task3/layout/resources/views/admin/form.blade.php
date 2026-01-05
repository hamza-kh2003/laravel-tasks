@extends('layouts.admin')

@section('title','form')


@section('content')
 <form class="container mt-4" style="max-width: 700px;">
  <h3 class="mb-4">Add Employee</h3>

  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Full Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter full name" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Phone</label>
      <input type="tel" class="form-control" name="phone" placeholder="Enter phone number">
    </div>

    <div class="col-md-6">
      <label class="form-label">Department</label>
      <select class="form-select" name="department" required>
        <option value="" selected disabled>Choose...</option>
        <option>HR</option>
        <option>IT</option>
        <option>Finance</option>
        <option>Marketing</option>
        <option>Sales</option>
      </select>
    </div>

    <div class="col-md-6">
      <label class="form-label">Job Title</label>
      <input type="text" class="form-control" name="job_title" placeholder="e.g. Backend Developer" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Start Date</label>
      <input type="date" class="form-control" name="start_date" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Salary</label>
      <input type="number" class="form-control" name="salary" placeholder="e.g. 800" min="0" step="0.01">
    </div>

    <div class="col-md-6">
      <label class="form-label">Status</label>
      <select class="form-select" name="status" required>
        <option value="active" selected>Active</option>
        <option value="inactive">Inactive</option>
      </select>
    </div>

    <div class="col-12">
      <label class="form-label">Notes</label>
      <textarea class="form-control" name="notes" rows="3" placeholder="Optional notes..."></textarea>
    </div>

    <div class="col-12 d-flex gap-2 mt-2">
      <button type="submit" class="btn btn-primary">Save</button>
      <button type="reset" class="btn btn-outline-secondary">Clear</button>
    </div>
  </div>
</form>

@endsection