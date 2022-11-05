<?php
/*
Plugin Name: practice1
*/

add_action('login_head', function () {
?>
  <script>
    document.addEventListener('DOMContentLoaded', () => {

      const icon = document.querySelector('#login > h1 > a')
      console.log(icon)
    })
  </script>
  <style>
    #login>h1>a {
      background-image: url(<?php echo home_url() . '/wp-content/plugins/hasami.jpeg' ?>);
    }
  </style>
<?php
});
