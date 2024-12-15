<?php 
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

require './connect.php';

$user_id = $_SESSION['user_id'];
$userid = $_GET['user_id'];

$user = "SELECT * FROM users WHERE Id=$userid";
$result = mysqli_query($conn,$user);
$users = mysqli_fetch_all( $result );


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
    <link rel="stylesheet" href="profile.css">
    <script defer src="profile.js"></script>
    <style>
        
    </style>
</head>
<body>

    
<?php if (isset($_SESSION['user_id'])): ?>
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

    <main class="profile-page">
        <div class="profile-container">
            

            <?php foreach($users as $u){?>
                <div class="profile-picture">
                <img src="./images/<?php echo $u['8']?>" alt="User Avatar">
            </div>
            <div class="profile-details">
                <h1 id="name-display"><?php echo $u['1']?> <?php echo $u['2']?></h1>
                <p><strong>Email:</strong> <span id="email-display"><?php echo $u['3']?></span></p>
                <p><strong>Gender:</strong> <span id="gender-display"><?php echo $u['5']?></span></p>
                <p><strong>Phone:</strong> <span id="phone-display"><?php echo $u['6']?></span></p>
                <p><strong>Address:</strong> <span id="address-display"><?php echo $u['7']?></span></p>
                <button id="edit-profile-btn" class="edit-profile-btn">Edit Profile</button>
            </div>
            <?php } ?>
        </div>

        <form id="edit-profile-form" class="hidden" method="POST" action="update.php">
            <h2>Edit Profile</h2>
            <label for="name">First Name:</label>
            <input type="text" id="name" name="fname" value="<?php echo $u['1']?>">
            <label for="name">Last Name:</label>
            <input type="text" id="name" name="lname" value="<?php echo $u['2']?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $u['3']?>">
            <label for="password">Password:</label>
            <input type="text" id="pass" name="password" value="<?php echo $u['4']?>">
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" value="<?php echo $u['5']?>">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" value="<?php echo $u['6']?>">
            <label for="address">Address:</label>
            <textarea id="address" name="address"><?php echo $u['7']?></textarea>
            <input type="text" name="user_id" value="<?php echo $user_id?>" hidden>
            <input type="file" id="image" name="image">
            <button type="submit" id="save-profile-btn" class="save-profile-btn">Save Changes</button>
        </form>
    </main>

    <footer style="margin-top:20%">
        <div class="footer-content">
            <p>&copy; 2024 BooksBinary. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="homescrit.js"></script>
</body>
</html>
