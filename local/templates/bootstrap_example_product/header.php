<?php
// проверка подключено-ли ядро битрикса, то есть инициализирована ли КОНСТАНТА глубоко в ядре
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/* подключим пространство чтобы воспользоваться классом Asset */
use Bitrix\Main\Page\Asset;

/* создадим экземпляр Asset`a */
$asset = Asset::getInstance();

/* воспользуемся методом, для подключения css */
/* .min. подключатся автоматически */
/* $asset->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/product.css"); */
/* нужно также связать подключенные файлы с телом страницы */

/* подключение JS-файлов */
$asset->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.bundle.min.js");
?>

<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Hugo 0.104.2">
   <title><?php $APPLICATION->ShowTitle()?></title>
   <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/product/">
   <!-- подключаем css -->
   <!-- <link href="<?= SITE_TEMPLATE_PATH ?>/css/bootstrap.min.css" rel="stylesheet"> -->
   <!-- связываем подключенные стили со страницей -->
   <?php $APPLICATION->ShowHead()?>

   <style>
      .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
      }

      @media (min-width: 768px) {
         .bd-placeholder-img-lg {
            font-size: 3.5rem;
         }
      }

      .b-example-divider {
         height: 3rem;
         background-color: rgba(0, 0, 0, .1);
         border: solid rgba(0, 0, 0, .15);
         border-width: 1px 0;
         box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
         flex-shrink: 0;
         width: 1.5rem;
         height: 100vh;
      }

      .bi {
         vertical-align: -.125em;
         fill: currentColor;
      }

      .nav-scroller {
         position: relative;
         z-index: 2;
         height: 2.75rem;
         overflow-y: hidden;
      }

      .nav-scroller .nav {
         display: flex;
         flex-wrap: nowrap;
         padding-bottom: 1rem;
         margin-top: -1px;
         overflow-x: auto;
         text-align: center;
         white-space: nowrap;
         -webkit-overflow-scrolling: touch;
      }
   </style>


   <!-- Custom styles for this template -->
   <!-- подключаем css -->
   <!-- <link href="<?= SITE_TEMPLATE_PATH ?>/css/product.css" rel="stylesheet"> -->
</head>

<body>
<!-- рендерим панель-админки, при авторизованном админе -->
<?php $APPLICATION->ShowPanel()?>

   <header class="site-header sticky-top py-1">
      <nav class="container d-flex flex-column flex-md-row justify-content-between">
         <a class="py-2" href="#" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24">
               <title>Product</title>
               <circle cx="12" cy="12" r="10" />
               <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
            </svg>
         </a>
         <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
         <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
         <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
         <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
         <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
         <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
         <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
      </nav>
   </header>

   <main>
   <!-- <main> закрыт в footer.php -->