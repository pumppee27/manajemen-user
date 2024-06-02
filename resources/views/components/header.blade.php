<header>
  {{-- Toggle Menu --}}
  <div id="logo">
    <a href="/">

      <img src="/assets/img/logo.png"/>
    </a>
  </div>
  <div id="toggle-sidebar">
      <img src="/assets/icons/list.svg"/>
  </div>
 
  <div id="date-time" class="d-flex align-items-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar4" viewBox="0 0 16 16">
      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
    </svg>
      <div id="hari" class="ms-1 me-2"></div>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
        </svg>
      </div>
      <div id="jam" class="ms-1"></div>
      
  </div>
  <div id="user-menu" class="me-4">
      <div class="dropdown">
          <button class="btn dropdown-toggle dropdown-toggle-user" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            USer
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
  </div>
  
</header>