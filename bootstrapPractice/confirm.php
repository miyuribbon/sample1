
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sample Site</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="body-container">

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
            <p><a href="contact.php" class="btn btn-danger">Contact</a></p>
          </div>
      </div>
      </div>
    </header>

<!--ここからメイン-->

  <div class="text-center">
    <div class="catch-copy p-5">
    <h1 class="text-center display-3 text-muted">Confirmation</h1>
    </div>
    <div class="bg-secondary">
        <p class="text-center text-white py-3">confirmconfirmconfirmconfirm</p>
    </div>

    <table  class="table mt-5 mb-5">
        <tr>
            <th>Name</th><td><?php $name=$_POST['name'];
             echo $name; ?></td>
        </tr>
        <tr>
            <th>E-mail Adress</th><td><?php echo$_POST['mailAdress']; ?></td>
        </tr>
        <tr>
            <th>Age</th><td><?php echo $_POST['age']; ?></td>
        </tr>
        <tr>
            <th>Country</th><td><?php echo $_POST['country']; ?></td>
        </tr>
        <tr>
            <th>Content</th><td><?php echo $_POST['contents']; ?></td>
        </tr>
    </table>

    <p class="mb-5">Thank you. We will reply to you by an e-mail. <br>Please wait for a while.</you></p>

</div>

<!--ここからフッター-->
   <footer class="bg-secondary p-2">
       <p class="text-white">@copyright-texttexttexttext</p>
   </footer>
   </div>
  </body>
</html>
 