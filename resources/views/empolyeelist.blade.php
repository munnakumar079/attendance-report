
<!doctype html>
<html lang="hi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Employee Attendance</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root{
      --primary:#1a73e8;
      --glass-bg: rgba(255,255,255,0.75);
      --card-shadow: 0 8px 30px rgba(18,38,63,0.08);
      --accent-gradient: linear-gradient(135deg,#6b9cff,#1a73e8);
    }

    body{
      font-family: "Inter", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background: linear-gradient(180deg, #eef6ff 0%, #f7fbff 100%);
      min-height:100vh;
    }

    /* SIDEBAR */
    #sidebar{
      min-width: 240px;
      max-width: 240px;
      height: 100vh;
      background: var(--glass-bg);
      backdrop-filter: blur(8px);
      border-right: 1px solid rgba(0,0,0,0.04);
      box-shadow: var(--card-shadow);
    }
    .sidebar-brand{
      font-weight:700; color:var(--primary); font-size:1.05rem;
    }
    .nav-link.active{
      background: var(--accent-gradient);
      color:white !important;
      border-radius:10px;
      box-shadow: 0 6px 20px rgba(26,115,232,0.18);
    }

    /* TOPBAR */
    .topbar{
      height:72px;
      display:flex;
      align-items:center;
      gap:16px;
    }

    .avatar{
      width:44px; height:44px; border-radius:10px;
      background-image:url('https://i.pravatar.cc/100'); background-size:cover;
      box-shadow: 0 6px 20px rgba(0,0,0,0.06);
      border:2px solid #fff;
    }

    /* CARDS */
    .stat-card{
      border-radius:14px;
      background: linear-gradient(180deg, rgba(255,255,255,0.9), rgba(255,255,255,0.74));
      box-shadow: var(--card-shadow);
      padding:18px;
    }
    .stat-number{ font-weight:700; font-size:1.6rem; color:var(--primary); }

    /* TABLE */

    /* RESPONSIVE SIDEBAR COLLAPSE */
    @media (max-width: 991.98px){
      #sidebar{ position: fixed; left: -320px; top:0; height:100vh; z-index:1050; transition: left .25s ease; }
      #sidebar.show{ left:0; }
      .search-input{ max-width: 50%; }
    }

    /* small niceties */
    .btn-flat{ background:transparent; border:1px solid rgba(26,115,232,0.12); color:var(--primary); }

     .page-title {
            font-size: 28px;
            font-weight: 600;
        }
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        th {
            background: #4c6ef5 !important;
            color: #fff !important;
        }
        .search-box input {
            border-radius: 30px;
            padding-left: 20px;
        }
        .btn-add {
            border-radius: 30px;
            padding: 8px 20px;
        }
        tr:hover {
            background: #eef2ff;
        }
        .emp-img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
        }

  </style>
</head>
<body>

<!-- MAIN LAYOUT -->
<div class="d-flex">

  <!-- SIDEBAR -->
  <nav id="sidebar" class="p-3">
    <div class="d-flex align-items-center mb-3">
      <div class="me-2" style="width:44px;height:44px;border-radius:10px;background:var(--accent-gradient);display:flex;align-items:center;justify-content:center;color:white;font-weight:700;">AS</div>
      <div>
        <div class="sidebar-brand">Attendance Sheet</div>
        <div style="font-size:12px;color:#6b7280">HR & Attendance</div>
      </div>
    </div>

    <hr>

    <ul class="nav flex-column">
      <li class="nav-item mb-1"><a class="nav-link active d-flex align-items-center gap-2" href="#"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
      <li class="nav-item mb-1"><a class="nav-link d-flex align-items-center gap-2" href="{{ route('employees') }}"><i class="bi bi-people"></i> Employees</a></li>
      <li class="nav-item mb-1"><a class="nav-link d-flex align-items-center gap-2" href="#markSection"><i class="bi bi-file-earmark-check"></i> Mark Attendance</a></li>
      <li class="nav-item mb-1"><a class="nav-link d-flex align-items-center gap-2" href="#calendarSection"><i class="bi bi-calendar3"></i> Calendar</a></li>
      <li class="nav-item mb-1"><a class="nav-link d-flex align-items-center gap-2" href="#reportsSection"><i class="bi bi-bar-chart-line"></i> Reports</a></li>
      <li class="nav-item"><a class="nav-link d-flex align-items-center gap-2" href="#"><i class="bi bi-gear"></i> Settings</a></li>
    </ul>

  </nav>

  <!-- CONTENT -->
  <div class="flex-grow-1">

    <!-- MAIN GRID -->
    <div class="container py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">👨‍💼 Employee List</h2>
        <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
  + Add Employee
</button>

    </div>

    <!-- Search -->

    <!-- Table -->
    <div class="card card-custom p-3">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Employee</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Join Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://i.pravatar.cc/45?img=12" class="emp-img">
                                <div>
                                    <strong>Rohit Singh</strong><br>
                                    <small class="text-muted">rohit@example.com</small>
                                </div>
                            </div>
                        </td>
                        <td>Frontend Developer</td>
                        <td>IT</td>
                        <td>12 Mar 2024</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://i.pravatar.cc/45?img=32" class="emp-img">
                                <div>
                                    <strong>Priya Sharma</strong><br>
                                    <small class="text-muted">priya@example.com</small>
                                </div>
                            </div>
                        </td>
                        <td>HR Manager</td>
                        <td>HR</td>
                        <td>05 Jan 2023</td>
                        <td><span class="badge bg-warning text-dark">On Leave</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    <!-- Add Employee Modal -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="border-radius:15px;">
      <div class="modal-header">
        <h5 class="modal-title">➕ Add New Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form >
        @csrf

        <div class="modal-body">
          <div class="row g-3">

            <div class="col-md-6">
              <label class="form-label">Full Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Designation</label>
              <input type="text" name="designation" class="form-control">
            </div>

            <div class="col-md-6">
              <label class="form-label">Department</label>
              <input type="text" name="department" class="form-control">
            </div>

            <div class="col-md-6">
              <label class="form-label">Join Date</label>
              <input type="date" name="join_date" class="form-control">
            </div>

            <div class="col-md-6">
              <label class="form-label">Status</label>
              <select name="status" class="form-select">
                <option value="Active">Active</option>
                <option value="On Leave">On Leave</option>
              </select>
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button class="btn btn-primary">Save Employee</button>
        </div>

      </form>
    </div>
  </div>
</div>


</div> 
  </div> <!-- content -->
</div> <!-- main flex -->



<!-- BOOTSTRAP JS (bundle includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
