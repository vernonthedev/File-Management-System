<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 5px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}

.text-small {
  font-size: 85%;
}

.dropdown-toggle {
  outline: 0;
}


</style>



<header class="p-3 mb-3 bg-dark sticky-top">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <i class="fa fa-share-alt"></i>
		  <h4>Meditech Mavericks</h4>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-start mb-md-0">
          <li><a href="#" class="nav-link px-2 link-dark text-white">File View</a></li>
        </ul>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
		Welcome  <?php echo $_SESSION['login_name'] ?>
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item " href="ajax.php?action=logout">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
