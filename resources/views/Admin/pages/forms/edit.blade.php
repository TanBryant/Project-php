<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{@asset('/assets/css/style.css')}}">
</head>

<body>
  <div class="card">
    <div class="card-body">
      <h3 class="card-title">Edit user</h3>

      <form class="forms-sample" action="{{ url('Admin/$user->id') }}" method="POST">
        @method('put')
        {!! csrf_field() !!}
        <div class="form-group">
          <label for="exampleInputUsername1">Username</label>
          <input type="text" name="username" value="{{$user->username}}" class="form-control" id="exampleInputUsername1" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" value="{{$user->password}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputConfirmPassword1">Phone</label>
          <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="exampleInputConfirmPassword1" placeholder="phone">
        </div>

        <button type="submit" value="Save" name="submit" class="btn btn-primary mr-2">Update</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
</body>

</html>