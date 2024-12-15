<?php 
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

require './connect.php';
$genre_name=$_GET['genre_name'];
$genre = "SELECT * FROM genre";
$result = mysqli_query($conn,$genre);
$genres = mysqli_fetch_all( $result );

$book = "SELECT * FROM books";
$result = mysqli_query($conn,$book);
$books = mysqli_fetch_all( $result );

$user_id = $_SESSION['user_id'];
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
    <link rel="stylesheet" href="homestyle.css">
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
    <form action="search.php" method="GET" class="search-form">
        <input type="text" name="query" placeholder="Search for a book by name..." required>
        <button type="submit" class="search-btn">Search</button>
    </form>

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

<section class="genres" id="genres">

    <h1 class="heading">Explore Your<span> Books</span></h1>

        <div class="box-container">
        <?php foreach($books as $b){
            if($b['4']===$genre_name){?>
            <div class="box">
            <img src="./images/<?php echo $b['1']?>" alt="">
            <h3><?php echo $b['2']?></h3>
            <h4><?php echo $b['3']?></h4>
            <a href="books.php?bookid=<?php echo $b['0']?>&genre_name=<?php echo $b['4']?>" class="btn">View More</a>
            </div>
            <?php }} ?>
        </div>   
</section>
    
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="homescrit.js"></script>
</body>
</html>