<!DOCTYPE html>
<html>
<head>
    


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <style> 
     body {
        background-image: url('img/bg student.png');
        background-size: cover; 
        background-position: center; 
 }
</style>



</head>
<body>

<div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/Logo.png" width="300px" alt=""></a>

</div>
<div class="container" style="width: 500px; margin-top: 50px;">
    <div class="card" style="display: flex; background: none; border: none;">
        <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">
            <img src="img/student Login.png" alt="Admin Image" style="width: auto; height: 100%; border: none;">
        </div>

    <form class="form-group" action="studvalidate.php" method="POST">
        <label>Bolton ID</label>
        <input type="text" name="username" class="form-control" placeholder="Enter your Username" required=""><br>
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password" required=""><br>
        <center>
        <input type="submit" name="loginsubmit"  class="btn btn-info" value="Login">    
        </center>
        
    </form>
</div>
</div>
</div>
 <footer id="footer" class="midnight-blue">
        <div class="container" style="width: 500px; margin-top: 150px  ">
            <div class="row">
                <div class="col-sm-12">
                    <center> University Of Bolton &copy; <?= date('Y'); ?> .All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
