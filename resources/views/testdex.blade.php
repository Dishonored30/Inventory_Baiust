@extends('test')




@section('register')
    <span class="login100-form-logo">
      <img src="/nasifcss/images/logo.png">
    </span>
  <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th >ID</th>
      <th >TYPE</th>
      <th >VENDOR</th>
      
    </tr>
  </thead>

    <tbody>
      @foreach ($products as $product)
    <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->type }}</td>
      <td>{{ $product->vendor }}</td>
     
    </tr>
    @endforeach
  </tbody>
  
</table>
  </div>
@endsection
  

