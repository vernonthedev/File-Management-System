
 <nav id="sidebar" class='mx-lt-5 nav-bar' >
 <div class="flex-shrink-0 p-3 bg-white">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-5 fw-semibold">File Structures</span>
    </a>
    <ul class="list-unstyled ps-0">
	<li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
		<i class="bi bi-chevron-double-down"></i>Overrview
        </button>
        <div class="collapse" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="index.php?page=home" class="link-dark text-decoration-none rounded"><i class="bi bi-house-fill"></i> Home</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
		<i class="bi bi-chevron-double-down"></i> Folders
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="index.php?page=files" class="link-dark text-decoration-none rounded"><i class="bi bi-archive-fill"></i> Uploaded Files</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
	  <?php if($_SESSION['login_type'] == 1): ?>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
		<i class="bi bi-chevron-double-down"></i> Manage Users
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="index.php?page=users" class="link-dark text-decoration-none rounded"><i class="bi bi-people-fill"></i> Users</a></li>
          </ul>
        </div>
      </li>
	  <?php endif; ?>
    </ul>
  </div>
  </nav>





<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
