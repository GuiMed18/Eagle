<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eagle</title>

    <!-- Custom fonts for this template-->
    <link href="../CPDPanel/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../CPDPanel/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-8">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center text-gray-700">
                                        <div class="sidebar-brand-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>
                                        </div>
                                        <div class="sidebar-brand-text mx-3">
                                            <h4>Eagle </h4>
                                        </div>
                             <form class="form-signin" method="POST" action="func/verif_login.php">
                            <div class="card-body text-center">
                                
                        <label for="inputEmail" class="sr-only">Email</label>
                       <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus><br>
                       <label for="inputPassword" class="sr-only">Senha</label>
                       <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                    
                  
 

                 <br>
                        </div>
                        
                        <button class="btn btn-secondary shadow-2 mb-4" type="submit">Acessar</button>
                        
                    </div>
                </form>
             
        <?php if(isset($_SESSION['loginErro'])){?>
            <p class="text-center text-danger">
        <?php    echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
           ?> </p>
       <?php }?>
   
    
        <?php 
        if(isset($_SESSION['logindeslogado'])){?>
        <p class="text-center text-success">
          <?php  echo $_SESSION['logindeslogado'];
            unset($_SESSION['logindeslogado']); 
            ?></p>
      <<?php  }
        ?>

                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

 <!-- Required Js -->
 <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>