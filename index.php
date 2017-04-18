<!DOCTYPE html>
<html>
<head>
<base href="<?php $url_info = parse_url( home_url() ); echo trailingslashit( $url_info['path'] ); ?>">
<title>Home | AngularJS Demo Theme</title>
<?php wp_head(); ?>
</head>
<body>
<div class="wrap" id="page" ng-app="app">
  <header class="page-header">
    <nav >
      <h1 class="page-title"> <a href="<?php echo home_url(); ?>">AngularJS Demo Theme</a> </h1>
      <?php wp_nav_menu('top'); ?>
    </nav>
  </header>
  <div ng-view></div>
  <button>Edit</button>
  <footer> &copy; <?php echo date( 'Y' ); ?> Gerard Weijer </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>