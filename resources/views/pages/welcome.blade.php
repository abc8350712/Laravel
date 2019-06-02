<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="center">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
      <div class="row google-logo text-center">
        <img src="img/log.png" alt="logo">      
      </div>
      <div class="row google-form text-center">
        <form action="scripts/search.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" class="form-control google-search" name="q">

                <div class="btn-group">
                  <button type="submit" class="btn btn-default">AV Search</button>
                  <a type="button" href="https://www.google.com/doodles" class="btn btn-default">Donate for us?</a>        
                </div>
            </div>
        </form>
        
      </div>
      
      
    </div>
    </div>
  </div>
</div>

