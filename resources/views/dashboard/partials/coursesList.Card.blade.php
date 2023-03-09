<div class="card" id="enrolledCoursesTable" data-list='{"valueNames":["title","trainer","date","time","progress","price"]}'>
    <div class="card-header d-flex flex-between-center">
      <h6 class="mb-0">Enrolled Courses</h6>
      <div>
        <button class="btn btn-falcon-default btn-sm me-2" type="button"><span class="fas fa-filter fs--2"></span><span class="d-none d-sm-inline-block ms-1 align-middle">Filter</span></button>
        <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-expand-arrows-alt fs--2"></span><span class="d-none d-sm-inline-block ms-1 align-middle">Expand</span></button>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive scrollbar">
        <table class="table mb-0 fs--1 border-200 overflow-hidden table-enrolled-courses">
          <thead class="bg-light font-sans-serif">
            <tr class="text-800">
              <th class="fw-medium sort" data-sort="title">Course Title </th>
              <th class="fw-medium sort" data-sort="trainer">Trainer</th>
              <th class="fw-medium sort" data-sort="date">Enrollment</th>
              <th class="fw-medium sort" data-sort="time">Worked</th>
              <th class="fw-medium sort" data-sort="progress">Progress</th>
              <th class="fw-medium sort text-end" data-sort="price">Price</th>
              <th class="fw-medium no-sort pe-1 align-middle data-table-row-action"></th>
            </tr>
          </thead>
          <tbody class="list">
            <tr class="btn-reveal-trigger fw-semi-bold">
              <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="../../assets/img/elearning/courses/course3.png" width="60" alt="" /><a class="stretched-link text-truncate" href="../../app/e-learning/course/course-details.html">Advanced Design Tools for Modern Designs</a></div>
              </td>
              <td class="align-middle text-nowrap trainer"><a class="text-800" href="../../app/e-learning/trainer-profile.html">Bill finger</a></td>
              <td class="align-middle date">01/10/21</td>
              <td class="align-middle time">12h:50m:00s</td>
              <td class="align-middle">
                <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 75%"></div>
                </div>
              </td>
              <td class="align-middle text-end price">$39.99</td>
              <td class="align-middle text-end">
                <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger">
                  <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer bg-light py-2 text-center"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Show all enrollments<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
  </div>