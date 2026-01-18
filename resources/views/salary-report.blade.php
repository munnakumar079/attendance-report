<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Employee Salary Report</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
  background:#f4f6f9;
}
.card {
  border-radius: 12px;
}
.stat-box {
  background: #fff;
  padding: 15px;
  border-radius: 10px;
  text-align: center;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}
.stat-box h6 {
  font-size: 14px;
  color: #6c757d;
}
.stat-box h4 {
  margin: 0;
  font-weight: 700;
}
.present { color: green; }
.absent { color: red; }
.salary { color: #0d6efd; font-weight: 600; }
.extra { color: #fd7e14; font-weight: 600; }
</style>
</head>

<body>

<div class="container mt-4">

<h4 class="mb-3">Employee Monthly Salary Report</h4>

<!-- SUMMARY CARDS -->
<div class="row mb-4">
  <div class="col-md-3">
    <div class="stat-box">
      <h6>Total Employees</h6>
      <h4 id="totalEmployees">0</h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stat-box">
      <h6>Total Present Days</h6>
      <h4 class="present" id="totalPresent">0</h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stat-box">
      <h6>Total Absent Days</h6>
      <h4 class="absent" id="totalAbsent">0</h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stat-box">
      <h6>Total Salary Paid</h6>
      <h4 class="salary">₹ <span id="totalSalary">0</span></h4>
    </div>
  </div>
</div>

<!-- SALARY TABLE -->
<div class="card p-3">
  <div class="table-responsive">
    <table class="table table-hover align-middle text-center">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Employee</th>
          <th>Designation</th>
          <th>Present</th>
          <th>Absent</th>
          <th>Total Salary</th>
          <th>Working Salary</th>
          <th>Extra Work Salary</th>
        </tr>
      </thead>
      <tbody id="salaryTable"></tbody>
    </table>
  </div>
</div>

</div>
