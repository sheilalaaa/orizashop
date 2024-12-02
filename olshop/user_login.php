<?php 
include 'header.php';
?>

<!-- Link to Animate.css CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Container with pink gradient background -->
<div class="container-fluid" style="background: linear-gradient(to right, #FFD1DC, #FFB6C1); height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="container">
        <!-- Card for the Login Form -->
        <div class="card mx-auto animate__animated animate__fadeIn animate__delay-1s" style="max-width: 500px; border-radius: 10px; padding: 30px; background-color: #FFF0F5; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <h2 class="text-center animate__animated animate__fadeIn animate__delay-1s" style="font-family: 'Arial', sans-serif; font-size: 30px; border-bottom: 2px solid #FFB6C1; padding-bottom: 10px; margin-bottom: 30px; color: #D87093;">
                <b>Login</b>
            </h2>
            
            <!-- Form -->
            <form action="proses/login.php" method="POST">
                <div class="form-group animate__animated animate__fadeIn animate__delay-2s">
                    <label for="username" style="font-weight: bold; color: #D87093;">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" style="border-radius: 5px; height: 45px; border: 1px solid #FFB6C1;">
                </div>
                
                <div class="form-group animate__animated animate__fadeIn animate__delay-3s">
                    <label for="password" style="font-weight: bold; color: #D87093;">Password</label>
                    <input type="password" class="form-control" id="password" name="pass" placeholder="Password" style="border-radius: 5px; height: 45px; border: 1px solid #FFB6C1;">
                </div>
                
                <!-- Buttons -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg animate__animated animate__zoomIn animate__delay-4s" style="width: 100%; margin-top: 15px; background-color: #FF69B4; border: none; font-size: 18px; border-radius: 5px;">Login</button>
                    <a href="register.php" class="btn btn-primary btn-lg animate__animated animate__zoomIn animate__delay-4s" style="width: 100%; margin-top: 15px; font-size: 18px; border-radius: 5px; background-color: #D87093; color: white;">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
include 'footer.php';
?>
