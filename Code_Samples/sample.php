<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- charset -->
    <meta charset="utf-8">
    <!-- site description -->
    <meta name="description" content="Description of website.">
    <!-- keywords -->
    <meta name="keywords" content="Key, Words, Go, Here">
    <!-- set viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link basic stylesheet -->
    <link rel="stylesheet" type="text/css" href="/path/to/builtin.css">
    <!-- author -->
    <meta name="author" content="<?php echo "AUTHOR"; ?>">
    <!-- $TITLE -->
    <title> <!-- <?php echo "TITLE"; ?> --> </title>
  </head>
  <!-- begin document -->
  <body>
    <?php
      // $navlinks array holds the values for the topnav links
      //  "href", "target" "class", "id", "link"
      $navLinks = array(
        array (
          "href" => "#",
          "target" => "_self",
          "class" => "nav_link",
          "id" => "",
          "link_name" => "Home"),
        array (
          "href" => "#",
          "target" => "_self",
          "class" => "nav_link",
          "id" => "",
          "link_name" => "About"),
        array (
          "href" => "#",
          "target" => "_self",
          "class" => "nav_link",
          "id" => "",
          "link_name" => "Shop"),
        array (
          "href" => "#",
          "target" => "_self",
          "class" => "nav_link",
          "id" => "",
          "link_name" => "Gallery"),
        array (
          "href" => "#",
          "target" => "_self",
          "class" => "nav_link",
          "id" => "",
          "link_name" => "Cart"),
        array (
          "href" => "#",
          "target" => "_self",
          "class" => "nav_link",
          "id" => "",
          "link_name" => "Login")
      );
    ?>
    <nav class="fixed_top_nav">
      <div class="nav_logo_container" id"">
        <img class="nav_logo" src="/global/img/arch-python_logo.svg" alt="Arch Linux Logo">
      </div>
      <div class="nav_link_container" id"">
        <?php
          $i = 0;
          while ($i <= 5) {
            echo "
            <a href={$navLinks[$i]['href']}
            target={$navLinks[$i]['target']}
            class={$navLinks[$i]['class']}
            id={$navLinks[$i]['id']}>
            {$navLinks[$i]['link_name']}
            </a>";
            $i++;
          }
        ?>

        <input type="text" class="nav_search">
        <button class="nav_search_button" type="button" name="submit_search">Search</button>
      </div>
    </nav>

    <header>
        <?php
          include '/path/to/header.php';
        ?>
    </header>
    <article class="featured_products">
      <?php
        include '/path/to/featured_products.php';
      ?>
    </article>
    <main class=showcase>
        <?php
          include '/path/to/main_showcase.php';
        ?>
    </main>
    <footer>
        <?php
          include '/path/to/footer.php';
        ?>
    </footer>
  </body>
</html>
