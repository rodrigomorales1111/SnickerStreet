<?php

use Baulphp\Member;
if ( ! empty( $_POST[ 'login-btn' ] ) ) {
    require_once __DIR__ . '/lib/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset = 'utf-8' />
<meta name = 'viewport' content = 'width=device-width, initial-scale=1, shrink-to-fit=no' />
<title>Pagina inicio</title>
<link rel = 'icon' type = 'image/x-icon' href = 'img/Tenis.png' />
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css' rel = 'stylesheet' />
<link href = 'css/styles.css' rel = 'stylesheet' />
</HEAD>
<BODY>
<nav class = 'navbar navbar-expand-lg navbar-light bg-light'>
<div class = 'container px-4 px-lg-5'>
<a class = 'navbar-brand' href = '/log/login.html'>SnickerStreet</a>
<button class = 'navbar-toggler' type = 'button' data-bs-toggle = 'collapse' data-bs-target = '#navbarSupportedContent' aria-controls = 'navbarSupportedContent' aria-expanded = 'false' aria-label = 'Toggle navigation'><span class = 'navbar-toggler-icon'></span></button>
<div class = 'collapse navbar-collapse' id = 'navbarSupportedContent'>
<ul class = 'navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4'>
<li class = 'nav-item'><a class = 'nav-link active' aria-current = 'page' href = '#!'>Inicio</a></li>

<li class = 'nav-item dropdown'>
<a class = 'nav-link dropdown-toggle' id = 'navbarDropdown' href = '#' role = 'button' data-bs-toggle = 'dropdown' aria-expanded = 'false'>Tienda</a>
<ul class = 'dropdown-menu' aria-labelledby = 'navbarDropdown'>
<li><a class = 'dropdown-item' href = '#!'>Todos los productos</a></li>
<li>
<hr class = 'dropdown-divider' />
</li>
<li><a class = 'dropdown-item' href = '#!'>Productos populares</a></li>
<li><a class = 'dropdown-item' href = '#!'>Lo mas nuevo</a></li>
</ul>
</li>
</ul>
<form class = 'd-flex' >
<button class = 'btn btn-outline-dark' type = 'submit'>
<a class = 'bi bi-person' href = 'Login.php'> Iniciar Secion</a>
</button>
</form>
</div>
</div>
</nav>
<!-- Header-->
<header class = 'bg-dark py-5'>
<div class = 'container px-4 px-lg-5 my-5'>
<div class = 'text-center text-white'>
<h1 class = 'display-4 fw-bolder'>Snicker Street</h1>
<p class = 'lead fw-normal text-white-50 mb-0'>Encontraras todo lo que buscas</p>
</div>
</div>
</header>
<!-- Section-->
<section class = 'py-5'>
<div class = 'container px-4 px-lg-5 mt-5'>
<div class = 'row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'>
<div class = 'col mb-5'>
<div class = 'card h-100'>
<div class = 'badge bg-dark text-white position-absolute' style = 'top: 0.5rem; right: 0.5rem'>Sale</div>
<!-- Product image-->
<img class = 'card-img-top' src = 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/53571e34-9a0f-4830-8902-0c6e2f20b93b/calzado-air-max-90-se-HpNTbP.png' alt = '...' />
<!-- Product details-->
<div class = 'card-body p-4'>
<div class = 'text-center'>
<!-- Product name-->
<h5 class = 'fw-bolder'>Nike Air Max 90 SE</h5>
<div class = 'd-flex justify-content-center small text-warning mb-2'>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
</div>
<!-- Product price-->
$1999.00 - $2300.00
</div>
</div>
<!-- Product actions-->
<div class = 'card-footer p-4 pt-0 border-top-0 bg-transparent'>
<div class = 'text-center'><a class = 'btn btn-outline-dark mt-auto' href = ''>Ver Mas</a></div>
</div>
</div>
</div>
<div class = 'col mb-5'>
<div class = 'card h-100'>
<!-- Sale badge-->
<div class = 'badge bg-dark text-white position-absolute' style = 'top: 0.5rem; right: 0.5rem'>Sale</div>
<!-- Product image-->
<img class = 'card-img-top' src = 'https://static.nike.com/a/images/f_auto,b_rgb:f5f5f5,w_440/72087f1d-7d87-476e-84f5-8ce5a1507082/calzado-de-running-en-carretera-winflo-8-LHnhnx.png' alt = '...' />
<!-- Product details-->
<div class = 'card-body p-4'>
<div class = 'text-center'>
<!-- Product name-->
<h5 class = 'fw-bolder'>Nike Winflo 8</h5>
<!-- Product reviews-->
<div class = 'd-flex justify-content-center small text-warning mb-2'>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
</div>
<!-- Product price-->
<span class = 'text-muted text-decoration-line-through'>$2599.00</span> $2000.00
</div>
</div>
<!-- Product actions-->
<div class = 'card-footer p-4 pt-0 border-top-0 bg-transparent'>
<div class = 'text-center'><a class = 'btn btn-outline-dark mt-auto' href = '../login/index.html'>Agregar al carrito</a></div>
</div>
</div>
</div>
<div class = 'col mb-5'>
<div class = 'card h-100'>
<!-- Sale badge-->
<div class = 'badge bg-dark text-white position-absolute' style = 'top: 0.5rem; right: 0.5rem'>Sale</div>
<!-- Product image-->
<img class = 'card-img-top' src = 'https://static.nike.com/a/images/f_auto,b_rgb:f5f5f5,w_440/72d2a488-a065-47a1-bf66-e8adfe0ba1f7/calzado-de-b%C3%A1squetbol-air-jordan-36-low-nJBBHH.png' alt = '...' />
<!-- Product details-->
<div class = 'card-body p-4'>
<div class = 'text-center'>
<!-- Product name-->
<h5 class = 'fw-bolder'>Air Jordan XXXVI Low</h5>
<div class = 'd-flex justify-content-center small text-warning mb-2'>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
</div>
<!-- Product price-->
<span class = 'text-muted text-decoration-line-through'>$1999.00</span> $1499.00
</div>
</div>
<!-- Product actions-->
<div class = 'card-footer p-4 pt-0 border-top-0 bg-transparent'>
<div class = 'text-center'><a class = 'btn btn-outline-dark mt-auto' href = '#'>Agregar al carrito</a></div>
</div>
</div>
</div>
<div class = 'col mb-5'>
<div class = 'card h-100'>
<div class = 'badge bg-dark text-white position-absolute' style = 'top: 0.5rem; right: 0.5rem'>Sale</div>
<!-- Product image-->
<img class = 'card-img-top' src = 'https://static.nike.com/a/images/f_auto,b_rgb:f5f5f5,w_440/adc9c7d2-5cd2-4ac5-8583-ab4da7edd96f/calzado-dunk-low-se-bHNln0.png' alt = '...' />
<!-- Product details-->
<div class = 'card-body p-4'>
<div class = 'text-center'>
<!-- Product name-->
<h5 class = 'fw-bolder'>Nike Dunk Low SE</h5>
<!-- Product reviews-->
<div class = 'd-flex justify-content-center small text-warning mb-2'>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
</div>
<!-- Product price-->
$3499.00
</div>
</div>
<!-- Product actions-->
<div class = 'card-footer p-4 pt-0 border-top-0 bg-transparent'>
<div class = 'text-center'><a class = 'btn btn-outline-dark mt-auto' href = '#'>Agregar al carrito</a></div>
</div>
</div>
</div>
<div class = 'col mb-5'>
<div class = 'card h-100'>
<!-- Sale badge-->
<div class = 'badge bg-dark text-white position-absolute' style = 'top: 0.5rem; right: 0.5rem'>Sale</div>
<!-- Product image-->
<img class = 'card-img-top' src = 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' alt = '...' />
<!-- Product details-->
<div class = 'card-body p-4'>
<div class = 'text-center'>
<!-- Product name-->
<h5 class = 'fw-bolder'>Sale Item</h5>
<!-- Product price-->
<span class = 'text-muted text-decoration-line-through'>$50.00</span> $25.00
</div>
</div>
<!-- Product actions-->
<div class = 'card-footer p-4 pt-0 border-top-0 bg-transparent'>
<div class = 'text-center'><a class = 'btn btn-outline-dark mt-auto' href = '#'>Add to cart</a></div>
</div>
</div>
</div>
<div class = 'col mb-5'>
<div class = 'card h-100'>
<!-- Product image-->
<img class = 'card-img-top' src = 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' alt = '...' />
<!-- Product details-->
<div class = 'card-body p-4'>
<div class = 'text-center'>
<!-- Product name-->
<h5 class = 'fw-bolder'>Fancy Product</h5>
<!-- Product price-->
$120.00 - $280.00
</div>
</div>
<!-- Product actions-->
<div class = 'card-footer p-4 pt-0 border-top-0 bg-transparent'>
<div class = 'text-center'><a class = 'btn btn-outline-dark mt-auto' href = '#'>View options</a></div>
</div>
</div>
</div>
<div class = 'col mb-5'>
<div class = 'card h-100'>
<!-- Sale badge-->
<div class = 'badge bg-dark text-white position-absolute' style = 'top: 0.5rem; right: 0.5rem'>Sale</div>
<!-- Product image-->
<img class = 'card-img-top' src = 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' alt = '...' />
<!-- Product details-->
<div class = 'card-body p-4'>
<div class = 'text-center'>
<!-- Product name-->
<h5 class = 'fw-bolder'>Special Item</h5>
<!-- Product reviews-->
<div class = 'd-flex justify-content-center small text-warning mb-2'>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
</div>
<!-- Product price-->
<span class = 'text-muted text-decoration-line-through'>$2999.00</span> $2499.00
</div>
</div>
<!-- Product actions-->
<div class = 'card-footer p-4 pt-0 border-top-0 bg-transparent'>
<div class = 'text-center'><a class = 'btn btn-outline-dark mt-auto' href = '#'>Add to cart</a></div>
</div>
</div>
</div>
<div class = 'col mb-5'>
<div class = 'card h-100'>
<!-- Product image-->
<img class = 'card-img-top' src = 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' alt = '...' />
<!-- Product details-->
<div class = 'card-body p-4'>
<div class = 'text-center'>
<!-- Product name-->
<h5 class = 'fw-bolder'>Popular Item</h5>
<!-- Product reviews-->
<div class = 'd-flex justify-content-center small text-warning mb-2'>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
<div class = 'bi-star-fill'></div>
</div>
<!-- Product price-->
$40.00
</div>
</div>
<!-- Product actions-->
<div class = 'card-footer p-4 pt-0 border-top-0 bg-transparent'>
<div class = 'text-center'><a class = 'btn btn-outline-dark mt-auto' href = '#'>Agregar al carrito</a></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Footer-->
<footer class = 'py-5 bg-dark'>
<div class = 'container'>
<p class = 'm-0 text-center text-white'>Copyright &copy;
You website 2022</p>
</div>
</footer>
<script src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
<!-- Core theme JS-->
<script src = 'js/scripts.js'></script>
</body>
</html>