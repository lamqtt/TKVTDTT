<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../../Asset/bootstrap.css">
    <script src="../../Asset/bootstrap.js"></script>
    <script src="../../Asset/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
            <div class="row">
              <form action="../../view/search/1" method="POST" role="form" style="width: 100%">
                <div class="block-container">
                    <input type="text" class="form-control" name="data" id="" value="<?php echo $c ?>" style="width:60%;  display:inline;margin-right: 20px">
                    <button type="submit" class="btn btn-primary" style="width: 10%">Search</button>
                </div>

              </form>
            </div>
            <?php if (!empty($a)): ?>
                   
                      <div class="col-sm-12 col-sm-push-3">
                        <?php foreach ($a as $a => $b): ?>
                          <div class="row">
                            <a href="<?php echo $b['href'] ?>"><?php echo $b['title'] ?></a>
                            <p><?php echo $b['sub_content'] ?></p>
                          </div>
                        <?php endforeach ?> 
                      </div>
                  </div>

                  <div class="container">

                    <ul style=" display:inline;">
                      <?php $z = 0; ?>
                      <?php for($i = 1; $z < $p ; $i++): ?>
                          
                          <li style=" display:inline;"><a href="../../view/search/<?php echo $z+1; ?>" class="<?php if ($z == $l) { echo 'disabled';} ?>"><?php echo $i; ?></a></li>
                          <?php $z +=10; ?>
                      <?php endfor ?>
                    </ul>
                  </div>
            <?php else: ?>
                <div> There is no data</div>
            </div>
        </div>
            <?php endif ?>
       
</body>
</html>