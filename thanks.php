<?php 
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

require './connect.php';

$user_id = $_SESSION['user_id'];

$related = "SELECT * FROM cart WHERE user_id=$user_id ";
$result = mysqli_query($conn,$related);
$relate = mysqli_fetch_all( $result );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Binary</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="books.css">
    <link rel="stylesheet" href="homestyle.css">

    <link rel="stylesheet" href="cart.css">
    <script defer src="cart.js"></script>
    <style>
        
    </style>
</head>
<body>

    
<?php if (isset($_SESSION['user_id'])): ?>
<h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>


<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>
<?php else: ?>
<a href="login.php">Login</a>
<a href="register.php">Register</a>
<?php endif; ?>

<header class="header">
<a href="/IP_Lab/booksBinary/" class="logo"><i class="fas fa-book"></i> Books Binary</a>

<nav class="navbar">
        <a href="/IP_Lab/booksBinary/#home">Home</a>
        <a href="/IP_Lab/booksBinary/#mostsells">Popular Books</a>
        <a href="/IP_Lab/booksBinary/#genres">Genres</a>
        <a href="/IP_Lab/booksBinary/#features">Features</a>
        <a href="all.php">All Books</a>
         
    </nav>

<div class="icons">
    <div class="fas fa-bars" id="menu-btn"></div>
    <div class="fas fa-search" id="search-btn"></div>
    <a href="cart.php?user_id=<?php echo $user_id?>"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
    
    
    <div class="dropdown">
<div class="fas fa-user" id="login-btn">
<a href="profile.php?user_id=<?php echo $user_id?>" style="color:White"><span id="username-display"> </span></a>
    <a href="logout.php" class="logout" id="logout"></a>
    
</div>

</div>
</div>

<script>
    
    fetch('check_session.php')
        .then(response => response.json())
        .then(data => {
            if (data.loggedIn) {
                
                document.getElementById('username-display').textContent = data.username;
                document.getElementById('logout').textContent = "Logout";
                document.getElementById('login-btn').onclick = () => {
                    window.location.href = 'index.php'; 
                };
                
                document.getElementById('logout-dropdown').style.display = 'block';
            } else {
                
                document.getElementById('login-btn').onclick = () => {
                    window.location.href = 'login_reg.php'; 
                };
                
                document.getElementById('logout-dropdown').style.display = 'none';
            }
        });
</script>

<form action="" class="search-form">
    <input type="search" id="search-box" placeholder="Search Your Book..">
        <label for="search-box " class="fas fa-search"></label>
    </form>

</header>


<section>
<div class="text-center" style="margin-top:5%">
<h1 style="margin-bottom: 6%">
    Thanks for Purchasing!
</h1>
<a href="all.php" id="addmore-btn">Buy More Books</a>
</div>
</section>



<footer style="margin-top:24%">
        <div class="footer-content" >
            <p>&copy; 2024 BooksBinary. All Rights Reserved.</p>
        </div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="homescrit.js"></script>
</body>
</html>