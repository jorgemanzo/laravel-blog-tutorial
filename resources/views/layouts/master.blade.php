
<!DOCTYPE html>
<html lang="en">

  <head>
    
    @include('includes.header')

  </head>

  <body>

    @include('includes.navbar')

    <div class="blog-header">

        <div class="container">

                <h1 class="blog-title">The Bootstrap Blog</h1>

                <p class="lead blog-description">An example blog template built with Bootstrap.</p>

            </div>

        </div>

    </div>

    @include('layouts.errors')

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

            @yield('content')
                
        </div>

        @include ('includes.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('includes.footer')

  </body>

</html>

