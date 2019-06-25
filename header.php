<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>e_Web Starter Theme</title>
    <link rel="stylesheet" href="src/waves/waves.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?> >


<header class="masthead mb-auto">

        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" role="navigation">

            <div class="container">


                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><?php bloginfo(); ?></a>

                <!-- Navwalker  menu -->
<?php get_template_part('inc/navwalker', 'menu') ?>

                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

</header>








