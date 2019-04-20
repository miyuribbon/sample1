<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>


  <div class="body-container text-center">

<!--ここからヘッダー-->
    <header>
      <div class="container py-4">
      <div class="row">
          <div class="col-6">
            <p class="display-4"><a href="index.html">Sample Text</a></p>
          </div>
          <div class="col-3"> 
            <p>Tell 000-0000-0000</p>
            <p>Bussiness Time (9:00~18:00)</p>
          </div>
          <div class="col-3 text-center">
            <p><a href="" class="btn btn-danger">Contact</a></p>
          </div>
      </div>
      </div>
    </header>
 

    <!--ここからメイン-->
    <div class="catch-copy p-5">
    <h1 class="text-center display-3 text-muted">Contact Form</h1>
    </div>
    <div class="bg-secondary">
        <p class="text-center text-white py-3">contactcontactcontactcontactcontact</p>
    </div>


    <form action="confirm.php" method="post">
        <div class="p-4"><label>
            Name<input type="text" name="name"></label>
        </div>

        <div class="p-4"><label>
            e-mail Adress<input type="text" name="mailAdress"></label>
        </div>


        <div class="p-4"><label>
            Age<select name="age" id="">
            <?php for($i=10;$i<=90;$i++): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor ?>
            </select></label>
        </div>

        <div class="p-4"><label>
            Country
            <input type="radio" name="country" value="japan">japan
            <input type="radio" name="country" value="otherCountry">other country</label>
        </div>
        <div class="p-4"><label>
            Contents of your inquiry <br>
            <textarea name="contents"  cols="30" rows="10"></textarea>
        </label></div>
        <div class="p-4"><input type="submit" value="submit"></div>
    </form>

   <!--ここからフッター-->
   <footer class="bg-secondary p-2">
       <p class="text-white">@copyright-texttexttexttext</p>
   </footer>

  </div>
  </body>
</html>
 