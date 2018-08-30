<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
        <form method="post" action="{{action('PassportController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$uadsusers->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{$uadsusers->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Phone Number:</label>
              <input type="text" class="form-control" name="number" value="{{$uadsusers->number}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Passport Office</lable>
                <select name="office">
                  <option value="Mumbai"  @if($uadsusers->office=="Mumbai") selected @endif>Mumbai</option>
                  <option value="Chennai"  @if($uadsusers->office=="Chennai") selected @endif>Chennai</option>
                  <option value="Delhi" @if($uadsusers->office=="Delhi") selected @endif>Delhi</option>  
                  <option value="Bangalore" @if($uadsusers->office=="Bangalore") selected @endif>Bangalore</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
