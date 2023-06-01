<?php
	$menu = '
		<li><a href="index.php">О нас</a></li>
		<li><a href="catalog.php">Каталог</a></li>
		<li><a href="where.php">Где нас найти?</a></li>
		%s
	';

	$m = '';
	if(isset($_SESSION["role"])) {
		$m = '<li><a href="cart.php">Корзина</a></li>';
		$m .= ($_SESSION["role"] == "admin") ? '<li><a href="admin">Заказы</a></li>' : '';
		$m .= '<li><a href="controllers/logout.php">Выход</a></li>';
	} else
		$m = '
			<li><a href="index.php#login"><button>Вход</button></a></li>
			<li><a href="index.php#register"><button>Регистрация</button></a></li>
		';

	$menu = sprintf($menu, $m);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Интернет-магазин</title>
	<link rel="stylesheet" href="style.css">
	<script src="scripts/filter.js"></script>
	<script>
		let role = "<?= (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest" ?>";
	</script>
	<script src="/scripts/tailwindcss.js"></script>
</head>
<body>

	<header>
		<div class="top">
			<div class="row">
				<img src="logo/logo.png" alt="">
				<a href="index.php">
					<h1>Copy Star</h1>
				</a>
			</div>
			<h2>Девиз компании!</h2>
		</div>
		<div class="content">
			<ul>
				<?= $menu ?>
			</ul>
		</div>
	</header>


	<header aria-label="Site Header" class="shadow-sm">
  <div class="mx-auto max-w-screen-xl p-4">
    <div class="flex items-center justify-between gap-4 lg:gap-10">
      <div class="flex lg:w-0 lg:flex-1">
        <a href="#">
          <span class="sr-only">Logo</span>
          <span class="inline-block h-10 w-32 rounded-lg bg-gray-200"></span>
        </a>
      </div>

      <nav
        aria-label="Site Nav"
        class="hidden gap-8 text-sm font-medium md:flex"
      >
        <a class="text-gray-500" href="">About</a>
        <a class="text-gray-500" href="">Blog</a>
        <a class="text-gray-500" href="">Projects</a>
        <a class="text-gray-500" href="">Contact</a>
      </nav>

      <div class="hidden flex-1 items-center justify-end gap-4 sm:flex">
        <a
          class="rounded-lg bg-gray-100 px-5 py-2 text-sm font-medium text-gray-500"
          href=""
        >
          Log in
        </a>

        <a
          class="rounded-lg bg-blue-600 px-5 py-2 text-sm font-medium text-white"
          href=""
        >
          Sign up
        </a>
      </div>

      <div class="lg:hidden">
        <button class="rounded-lg bg-gray-100 p-2 text-gray-600" type="button">
          <span class="sr-only">Open menu</span>
          <svg
            aria-hidden="true"
            class="h-5 w-5"
            fill="none"
            stroke="currentColor"
            viewbox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M4 6h16M4 12h16M4 18h16"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>

	<div class="message"><?= (isset($_GET["message"])) ? $_GET["message"] : ""; ?></div>