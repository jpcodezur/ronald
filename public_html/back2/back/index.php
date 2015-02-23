<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecommerce</title>

        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Ecommerce</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" placeholder="Buscar" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Ir!</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1>Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container outer-container">
            <!-- Example row of columns -->
            <!--<div class="row">
              <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
              </div>
              <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
             </div>
              <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
              </div>
            </div>-->
            <!--            <div class="contenedor-botones-filtro">
                            <button class="filter" data-filter="all">All</button>
                            <button class="filter" data-filter=".category-autos">Autos</button>
                            <button class="filter" data-filter=".category-telefonos">Telefonos</button>
                            <button class="filter" data-filter=".category-fitness">Fitness</button>
                        </div>
                        <ul id="Container" class="container">
                            <li class="mix category-autos" data-myorder="1">
                                <img src="assets/img/products/cars/1.jpg">
                            </li>
                            <li class="mix category-autos" data-myorder="2">
                                <img src="assets/img/products/cars/2.jpg">
                            </li>
                            <li class="mix category-autos" data-myorder="3">
                                <img src="assets/img/products/cars/3.jpg">
                            </li>
                            <li class="mix category-autos" data-myorder="4">
                                <img src="assets/img/products/cars/4.jpg">
                            </li>
                            <li class="mix category-telefonos" data-myorder="5">
                                <img src="assets/img/products/phones/1.jpg">
                            </li>
                            <li class="mix category-telefonos" data-myorder="6">
                                <img src="assets/img/products/phones/2.jpg">
                            </li>
                            <li class="mix category-telefonos" data-myorder="7">
                                <img src="assets/img/products/phones/3.jpg">
                            </li>
                            <li class="mix category-telefonos" data-myorder="8">
                                <img src="assets/img/products/phones/4.jpg">
                            </li>
                            <li class="mix category-fitness" data-myorder="8">
                                <img src="assets/img/products/fitness/1.jpg">
                            </li>
                            <li class="mix category-fitness" data-myorder="8">
                                <img src="assets/img/products/fitness/2.jpg">
                            </li>
                            <li class="mix category-fitness" data-myorder="8">
                                <img src="assets/img/products/fitness/3.jpg">
                            </li>
                            <li class="mix category-fitness" data-myorder="8">
                                <img src="assets/img/products/fitness/4.jpg">
                            </li>
                            <li class="gap"></li>
                            <li class="gap"></li>
                        </ul>-->
            <div id="filters" class="button-group">
                <button class="btn btn-primary btn-lg" data-filter="*">show all</button>
                <button class="btn btn-primary btn-lg" data-filter=".cars">Cars</button>
                <button class="btn btn-primary btn-lg" data-filter=".fitness">Fitness</button>
                <button class="btn btn-primary btn-lg" data-filter=".phones">Phones</button>
            </div>
            <div id="wrap">
                <div class="box fitness" data-type="fitness" data-value=12><img src="assets/img/products/fitness/4.jpg"></div>
                <div class="box cars" data-type="cars" data-value=5><img src="assets/img/products/cars/1.jpg"></div>        
                <div class="box phones" data-type="phones" data-value=1><img src="assets/img/products/phones/2.jpg"></div>
                <div class="box cars" data-type="cars" data-value=3><img src="assets/img/products/cars/3.jpg"></div>
                <div class="box fitness" data-type="fitness" data-value=14><img src="assets/img/products/fitness/3.jpg"></div>
                <div class="box cars" data-type="cars" data-value=6><img src="assets/img/products/cars/4.jpg"></div>
                <div class="box phones" data-type="phones" data-value=4><img src="assets/img/products/phones/1.jpg"></div>
                <div class="box cars" data-type="cars" data-value=2><img src="assets/img/products/cars/2.jpg"></div>
                <div class="box phones" data-type="phones" data-value=7><img src="assets/img/products/phones/3.jpg"></div>
                <div class="box fitness" data-type="fitness" data-value=9><img src="assets/img/products/fitness/2.jpg"></div>
                <div class="box phones" data-type="phones" data-value=11><img src="assets/img/products/phones/4.jpg"></div>
                <div class="box fitness" data-type="fitness" data-value=8><img src="assets/img/products/fitness/1.jpg"></div>
            </div>
            <hr>
            <nav id="page_nav" style="display: none;">
                <a href="2.htm"></a>
            </nav>
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
        </div> <!-- /container -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery-1.11.2.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.isotope.min.js"></script>
        <script src="assets/js/jquery.infinitescroll.js"></script>
        <script>
            var $container = $('#wrap');

            /*var isotope = $container.isotope({
                itemSelector: '.box',
                getSortData: {
                    customValue: function ($el) {
                        return $el.data('value');
                    }
                }
            });*/
			
			var isotope = $container.isotope({
				itemSelector: '.box',
				masonry: {
				  columnWidth: 100
				}
			  });

            $('#filters').on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $container.isotope({filter: filterValue});
            });

            $container.infinitescroll({
                navSelector: '#page_nav', // selector for the paged navigation 
                nextSelector: '#page_nav a', // selector for the NEXT link (to page 2)
                itemSelector: '.box', // selector for all items you'll retrieve
                loading: {
                    finishedMsg: 'No more pages to load.',
                    img: 'http://i.imgur.com/qkKy8.gif'
                }
            },
            // call Isotope as a callback
            function (newElements) {
                $container.isotope('appended', $(newElements));
                var filterValue = $(this).attr('data-filter');
                $container.isotope({filter: filterValue});
            }
            );

        </script>
    </body>
</html>