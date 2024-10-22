<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-control" content="no-transform" />
    <meta http-equiv="Cache-control" content="no-cache" />
    <meta name="google" content="nopagereadaloud" />
    <link rel="icon" type="image/svg+xml" href="./assets/img/favicon.webp" />
    <link rel="stylesheet" href="./assets/css/style.css" />

    <title>Організація подій та свят</title>

    <meta
      name="description"
      content="Ми – команда, що займається організацією незабутніх свят і заходів. Довірте нам ваше свято, і ви зможете насолоджуватися кожною миттю!"
    />
    <meta
      name="keywords"
      content="організація свят, вечірки, корпоративи, команда, незабутні події, послуги, управління подіями"
    />
    <meta name="robots" content="index, follow" />
  </head>

  <body>
    <?php include './public/components/header.php' ?>
    <main>
      <?php include './public/components/main.php' ?>
      <?php include './public/components/about.php' ?>
      <?php include './public/components/servises.php' ?>
      <?php include './public/components/advantages.php' ?>
      <?php include './public/components/contact.php' ?>
      <?php include './public/components/form.php' ?>
    </main>
    <?php include './public/components/footer.php' ?>

    <?php include './public/components/nav-modal.php' ?>
    <?php include './public/components/cookie-notice.php' ?>

    <script src="./assets/js/cookieNotice.js" defer></script>
    <script src="./assets/js/modal.js" defer></script>
    <script src="./assets/js/formHandler.js" defer></script>

    <div style="display: none">
      <div itemscope itemtype="http://schema.org/Organization">
        <span itemprop="name">boxpodarunok.com</span>
        Контактна інформація:
        <div
          itemprop="address"
          itemscope
          itemtype="http://schema.org/PostalAddress"
        >
          Адреса:
          <span itemprop="streetAddress">Вул. Льва Толстого, 7</span>
          <span itemprop="postalCode">61000</span>
          <span itemprop="addressLocality">Харків, Україна</span>,
        </div>
        Телефон:<span itemprop="telephone">+380 59 765 43 21</span>,
        E-mail:<span itemprop="email">contact@boxpodarunok.com</span>, Фото:
        <img
          src="./assets/img/contact.webp"
          alt="Зображення контактної інформації"
          width="520"
          loading="lazy"
          itemprop="image"
        />
      </div>
    </div>
  </body>
</html>
