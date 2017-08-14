@extends ('layout')
@section ('content')
  @include('nav')

  <div class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">
        @include ('posts.post')

        <div class='all-posts'>
          <a href='/posts'>Back to all posts</a>
        </div>
      </div><!-- /.blog-main -->

      @include ('sidebar')

    </div><!-- /.row -->

  </div><!-- /.container -->

  @include('footer')
@endsection
