
@if (count($errors) > 0)

    <div class="container alert alert-danger" role="alert">

      <h4 class="alert-heading">There was a problem!</h4>

      <ul>

        @foreach ($errors->all() as $error)
          
          <li>{{ $error }}</li>

        @endforeach

      </ul>

    </div>
  
@endif