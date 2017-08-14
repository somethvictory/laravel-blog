@extends ('layout')
@section ('content')
  @include ('nav')
  <div class='container'>
    <div class='row'>
      <div class='col-sm-8'>
        <h1>Publish a post</h1>
        <hr>
        <form method='POST' action='/posts'>
          {{csrf_field()}}
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name='title' class="form-control" id="title" aria-describedby="emailHelp" placeholder="title">
          </div>
          <div class="form-group">
            <label for="body">Body</label>
            <textarea name='body' class="form-control" id="body" placeholder="Body"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Publish</button>
        </form>
      </div>
      @include ('sidebar')
    </div>

  </div>
  @include ('footer')
@endsection ('content')
