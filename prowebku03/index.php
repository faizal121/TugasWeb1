<!DOCTYPE html>
<html>
    <head>     <!-- head ini berfungsi sebagai tanda pengenal pada halaman yang akan
                    anda buat --> 
        <meta charset="UTF-8">
        <title> LOGIN </title>
        <link rel="icon" href="assets/images/favicon.ico">  <!-- head ini berfungsi untuk mendesain, mengubah icon dll -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css">
        <script>
      
        </script>
        
    </head>
    <body>  <!-- Anda dapat menuliskan berbagai text yang ingin
                 Anda tampilkan pada halaman web -->
        <!-- form ini digunakan untuk membuat desain form login, seperti ada kotakan 
        untuk tempat username dan password -->
        <form id="frm01" name="frm01" method="POST" action="login.php" class="form-signin jumbotron">
            <div class="text-center mb-4">
                <img class="mb-4" width="72"  height="72" src="assets/images/bootstrap-solid.svg">
                <h1>Login Form</h1> <!-- didalam image bisa diatur sprti yg di atas
                                         misal width dan sebagainya -->
                <p>Belajar Login</p>
            </div>
            <div class="form-label-group">
                <input class="form-control" type="email" name="email" id="email" required="" 
                       placeholder="Email Address" autofocus="yes" autocomplete="no">
                <label for="email">Email Address</label>
            </div>
            <div class="form-label-group">
                <input class="form-control" type="password" name="password" required="yes" 
                       id="password" placeholder="password">
                <label for="email">Password</label>
            </div>
            <div class="checkbox mb-4">
                <label>
                <input type="checkbox">
                Remember me
                </label>
            </div>
            <!-- button dapar digunakan sebagai salah satu desain untuk inputan -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">SIGN IN</button>            
            <!-- Modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" 
               aria-labelledby="DialogModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="DialogModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    bagian Modal Bodynya.....
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            
        </form>
        
        
    </body>
</html>
