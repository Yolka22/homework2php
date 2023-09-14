  <?php

  $links = [
    [
      'name' => 'Home',
      'url' => 'http://pegas-cms.localhost/',
      'num' => 0,
    ],
    [
      'name' => 'Blog',
      'url' => 'http://pegas-cms.localhost/blog/',
      'num' => 2,
    ],
    [
      'name' => 'Feedback',
      'num' => 1,
      'child' => [
        [
          'name' => 'List Feedback',
          'url' => 'http://pegas-cms.localhost/feedback/list',
          'num' => 3,
        ],
        [
          'name' => 'Add feedback',
          'url' => 'http://pegas-cms.localhost/feedback/themes/add',
          'num' => 2,
        ],
        [
          'name' => 'Search Feedback',
          'url' => 'http://pegas-cms.localhost/feedback/search/?newsearch=1',
          'num' => 1,
        ],
      ],
    ]
  ];

  // Відсортувати масив за полем num (менший виводиться першим)
  // Вивести масив у вигляди вкладених списків або (я би так зробила) - у вигляді navbar (прклад - https://www.w3schools.com/bootstrap/bootstrap_navbar.asp)
  usort($links, function ($a, $b) {
    return $a['num'] - $b['num'];
});

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>NavBarPHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <?php foreach ($links as $link) : ?>
        <?php if (isset($link['child'])) : ?>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $link['name'] ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <?php foreach ($link['child'] as $childLink) : ?>
                <li><a href="<?= $childLink['url'] ?>"><?= $childLink['name'] ?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
        <?php else : ?>
          <li><a href="<?= $link['url'] ?>"><?= $link['name'] ?></a></li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>

</body>
</html>
