<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="Asset/bootstrap.css">
    <script src="Asset/bootstrap.js"></script>
    <script src="Asset/bootstrap.min.js"></script>
</head>
<body>
        <div class="container">
            <div class="row">
                <img src="Asset/Search.png" alt="Search" style="width: 100%; height: 500px;">
            </div>
            <div class="col-sm-12 col-sm-push-3">
              <form action="view/search/1" method="POST" role="form">
                  <div class="form-group">                      
                      <input type="text" class="form-control" name="data" placeholder="Enter search" style="width: 100%">
                  </div>
                  <button type="submit" class="btn btn-primary">Search</button>
              </form>
            </div>
        </div>
</body>
</html>