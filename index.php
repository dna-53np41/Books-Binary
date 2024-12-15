<?php 
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

require './connect.php';
$genre = "SELECT * FROM genre";
$result = mysqli_query($conn,$genre);
$genres = mysqli_fetch_all( $result );

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
    
<?php else: ?>
    
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
<?php endif; ?>

<header class="header">
    <a href="/IP_Lab/booksBinary/" class="logo"><i class="fas fa-book"></i> Books Binary</a>
    
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#mostsells">Popular Books</a>
        <a href="#genres">Genres</a>
        <a href="#features">Features</a>
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

    
<section class="home" id="home">
            
    <div class="content">
        <h3>All Exclusive <span>Books</span> for You!</h3>
        <p>Explore a vast collection of bestsellers, rare finds, and timeless classics at unbeatable prices.
            Fast shipping, secure checkout, and exclusive deals await!</p>
        <a href="all.php" class="btn">Order Now!</a>
    </div>
</section>

<section class="features" id="mostsells">
    <h1 class="heading">Popular <span>Books</span></h1>



    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button style="margin-top:4rem" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button style="margin-top:4rem" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button style="margin-top:4rem" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="padding:5rem">
    <div class="carousel-item active" data-bs-interval="3000">
        <div class="box-container">
        <div class="box">
            <img src="images/one piece volume 103.jpg" alt="">
            <h3>One Piece</h3>
            <p>EIICHIRO ODA</p>
            <a href="books.php?bookid=11&genre_name=Comics" class="btn">More Info</a>
            
        </div>

        <div class="box">
            <img src="images/AnimalFarm.jpg" alt="">
            <h3>Animal Farm</h3>
            <p>GEORGE ORWELL</p>
            <a href="books.php?bookid=4&genre_name=Fiction" class="btn">More Info</a>
            
        </div>

        <div class="box">
            <img src="images/TheAlchemist.jpg" alt="">
            <h3>The Alchemist</h3>
            <p>PAULO COELHO</p>
            <a href="books.php?bookid=3&genre_name=Fiction" class="btn">More Info</a>
            
        </div>
        </div>
        
    </div>

    <div class="carousel-item" data-bs-interval="3000">
        <div class="box-container">
        <div class="box">
            <img src="images/Harry Potter and the Philosopher's Stone.jpg" alt="">
            <h3>Harry Potter</h3>
            <p>J. K. ROWLING</p>
            <a href="books.php?bookid=20&genre_name=Fantasy" class="btn">More Info</a>
            
        </div>

        <div class="box">
            <img src="images/A Study in Scarlet.jpg" alt="">
            <h3>A Study in Scarlet</h3>
            <p>SIR ARTHUR CONAN DOYLE</p>
            <a href="books.php?bookid=14&genre_name=Detective" class="btn">More Info</a>
            
        </div>

        <div class="box">
            <img src="images/Six of Crows.jpg" alt="">
            <h3>Six of Crows.jpg</h3>
            <p>LEIGH BARDUGO</p>
            <a href="books.php?bookid=18&genre_name=Fantasy" class="btn">More Info</a>
            
        </div>
        </div>
        

    </div>

    <div class="carousel-item" data-bs-interval="3000">
        <div class="box-container">
        <div class="box">
            <img src="images/The Silent Patient.jpg" alt="">
            <h3>The Silent Patient</h3>
            <p>A:EX MICHAELIDES</p>
            <a href="books.php?bookid=26&genre_name=Thriller" class="btn">More Info</a>
            
        </div>

        <div class="box">
            <img src="images/Xoxo.jpg" alt="">
            <h3>XOXO</h3>
            <p>AXIE OH</p>
            <a href="books.php?bookid=23&genre_name=Romance" class="btn">More Info</a>
            
        </div>

        <div class="box">
            <img src="images/The Fault in Our Stars.jpg" alt="">
            <h3>The Fault in Our Star</h3>
            <p>JOHN GREEN</p>
            <a href="books.php?bookid=22&genre_name=Romance" class="btn">More Info</a>
            
        </div>
        </div>
        

    </div>
    
  </div>

  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</section>



<section class="genres" id="genres">

    <h1 class="heading">Book <span>Genres</span></h1>

    
        <div class="box-container">
        <?php foreach($genres as $g){?>
            <div class="box">
                <img src="images/<?php echo $g['2']?>" alt="">
                <h3><?php echo $g['1']?></h3>
                <a href="genres.php?genre_name=<?php echo $g['1']?>" class="btn">Explore</a>
            </div>
        <?php } ?>
        </div>
        

</section>
 
<section class="features" id="features">
    <h1 class="heading">Our <span>Features</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="images/feature1.png" alt="">
            <h3>Free Deivery</h3>
            <p>Enjoy free delivery on all books—shop your favorites online and get them delivered hassle-free!</p>
        </div>

        <div class="box">
            <img src="images/feature2.jpg" alt="">
            <h3>Easy Payment</h3>
            <p>Checkout made simple: enjoy secure, flexible payment options for a seamless shopping experience on every order.</p>
        </div>

        <div class="box">
            <img src="images/feature3.jpg" alt="">
            <h3>E-Book</h3>
            <p>Access your favorite stories instantly with e-books—read anytime, anywhere on your preferred device.</p>
        </div>

    </div>
</section>

<section class="aboutus">
    <div class="box-container">
        <div class="box">
            <h3>Books Binary <i class="fas fa-book"></i></h3>
            <p>Books Binary: Your one-stop destination for all book genres. 
                Explore bestsellers, rare finds, and timeless classics. Affordable prices, secure payments, and fast delivery.
                Your journey to literary bliss starts here!</p>

            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#" class="links"><i class="fas fa-phone"></i>01779703580</a>
            <a href="#" class="links"><i class="fas fa-phone"></i>01521536532</a>
            <a href="#" class="links"><i class="fas fa-post"></i>alvealamac@gmail.com</a>
            <a href="#" class="links"><i class="fas fa-envelop"></i>iamamitchowdhury123@gmail.com</a>
            <a href="#" class="links"><i class="fas fa-map-marker-alt"></i>Jalalabad, Nobinagar, Savar, Dhaka</a>
            </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#" class="links"><i class="fas fa-arrow-right"></i>Home</a>
            <a href="#" class="links"><i class="fas fa-arrow-right"></i>Features</a>
            <a href="#" class="links"><i class="fas fa-arrow-right"></i>Genres</a>

            </div>
        </div>
    </div>

    <div class="footer-content">
            <p>&copy; 2024 BooksBinary. All Rights Reserved.</p>
        </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="homescrit.js"></script>
</body>
</html>
