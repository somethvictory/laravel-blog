@extends ('layout')
@section ('content')
  @include('nav')

  <div class="blog-header">
    <div class="container">
      <h1 class="blog-title">Welcome to my blog!!!</h1>
      <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">
        @foreach ($posts as $post)
          @include ('posts.post')
        @endforeach

      </div><!-- /.blog-main -->

      @include ('sidebar')

    </div><!-- /.row -->

  </div><!-- /.container -->

  @include('footer')
@endsection
