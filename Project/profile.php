
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </head>

<style media="screen">

  *{
    margin: 0px;
    padding:0px;
  }

  body{
  background-image: url('profile.jpg');
  background-attachment: fixed;
  background-size: cover;
  font-family: new time romain;
  }

  h1{
  font-size: 40px;
  color: gray;
  margin-top: 20px;
  margin-bottom: 30px;
  text-align: center;
  }

  .label{
    font-size: 19px;
    margin-top: 20px;
    font-weight: normal;
  }

  .form-control {
    background: rgba(255,255,255, 0.2);
    border: 0px;
    border-radius: 0px;
    border-bottom: 2px solid white;
    font-size: 21px;
    color: white;
    margin-top: 20px;
  }

  .col-md-6{
    background:rgba(0,0,0,0.4);
    height: 560px;
    box-shadow: -1px 1px 60px 10px black inset;
  }

  .container{
    margin-top:80px;
  }


</style>

  <body>



  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>

      <div class="col-md-6">
    


        <br><h1>Admin Profile</h1>

        <label class="label col-md-3 control-label" for="">First Name : </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="first_name" value="echo $result[first_name];">
        </div>

        <label class="label col-md-3 control-label" for="">Last Name : </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="first_name" value="">
        </div>

        <label class="label col-md-3 control-label" for="">Date of Birth : </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="first_name" value="">
        </div>

        <label class="label col-md-3 control-label" for="">Gender : </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="first_name" value="">
        </div>

        <label class="label col-md-3 control-label" for="">Username :</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="first_name" value="">
        </div>

        <label class="label col-md-3 control-label" for=""> Email : </label>
        <div class="col-md-9">
          <input type="email" class="form-control" name="first_name" value="">
        </div>

        <label class="label col-md-3 control-label" for="">Phone No. : </label>
        <div class="col-md-9">
          <input type="tel" class="form-control" name="first_name" value="">
        </div>

      </div>
      <div class="col-md-3"></div>

    </div>
</div>


  </body>
</html>
