<?php
/*
Plugin Name: practice2
*/

add_action('login_head', function () {
?>
  <script>
    console.log('aaa')
  </script>
  <style>
    #login>h1>a {
      background-image: url(<?php echo home_url() . '/wp-content/themes/practice2/images/logo.png' ?> );
    }
  </style>
<?php
});
