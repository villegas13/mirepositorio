<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">

    <title>About - Darisset</title>
</head>

<body>

    <!-- navbar -->
    <nav class="nav" id="nav">
        <div class="nav-center">
            <!-- nav header -->
            <div class="nav-header">
                <img src="./img/logo.png" class="nav-logo" alt="" />
                <button class="nav-btn" id="nav-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <!-- nav links -->
            <ul class="nav-links">
                <li><a href="index.php">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <div class="dropdown">
                    <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-expanded="false">
                        Blog
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="blog.php">Blog</a></li>
                        <li><a class="dropdown-item" href="category.php">Category</a></li>
                        <li><a class="dropdown-item" href="detail.php">Detail</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class=" dropdown-toggle" href="#" role="button" id="UserDropdown" data-toggle="dropdown"
                        aria-expanded="false">
                        User
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="UserDropdown">
                        <li><a class="dropdown-item" href="user.php">User</a></li>
                        <li><a class="dropdown-item" href="login.php">login</a></li>
                        <li><a class="dropdown-item" href="register.php">regster</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>

    <!-- sidebar -->
    <aside class="sidebar" id="sidebar">
        <div>
            <button id="close-btn" class="close-btn">
                <i class="fas fa-times"></i>
            </button>
            <ul class="sidebar-links">
                <li><a href="index.php">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="category.php">Category</a></li>
                <li><a href="detail.php">Detail</a></li>
                <li><a href="user.php">User</a></li>
            </ul>
            <ul class="social-icons">
                <!-- single item -->
                <li class="pr-3">
                    <a href="https://www.twitter.com" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <!-- end of single item -->
                <!-- single item -->
                <li>
                    <a href="https://www.twitter.com" class="social-icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <!-- end of single item -->
                <!-- single item -->
                <li>
                    <a href="https://www.twitter.com" class="social-icon">
                        <i class="fab fa-squarespace"></i>
                    </a>
                </li>
                <!-- end of single item -->
                <!-- single item -->
                <li>
                    <a href="https://www.twitter.com" class="social-icon">
                        <i class="fab fa-behance"></i>
                    </a>
                </li>
                <!-- end of single item -->
                <!-- single item -->
                <li>
                    <a href="https://www.twitter.com" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <!-- end of single item -->
            </ul>
        </div>
    </aside>
    <!-- end of sidebar -->

    <div class="blog pb-5">
        <div class="container">
            <!-- about -->
            <section class="section user">
                <div class="section-center user-center">
                    <!-- user img -->
                    <article class="user-img">
                        <img src="./img/user.JPG" class="hero-photo" alt="" />
                    </article>
                    <!-- user info -->
                    <article class="user-info">
                        <!-- section title -->
                        <div class="section-title user-title">
                            <h2>user</h2>
                            <div class="underline"></div>
                        </div>
                        <!-- section title -->
                        <!-- lorem 40 -->
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                            atque incidunt eveniet nisi beatae aliquid illo magni ullam animi
                            vero, eius cum debitis hic doloribus assumenda ducimus? Ducimus,
                            expedita, maiores velit quo facilis qui hic voluptatum voluptas ea
                            officiis maxime?
                        </p>
                        <!-- lorem 40 -->
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                            atque incidunt eveniet nisi beatae aliquid illo magni ullam animi
                            vero, eius cum debitis hic doloribus assumenda ducimus? Ducimus,
                            expedita, maiores velit quo facilis qui hic voluptatum voluptas ea
                            officiis maxime?
                        </p>
                        <a href="user.php" class="btn user-btn">user me</a>
                    </article>
                </div>
            </section>
            <!-- end of about about -->
        </div>
    </div>

    

    <footer class="footer">
        <ul class="social-icons mt-5">
            <!-- single item -->
            <li class="pr-3">
                <a href="https://www.twitter.com" class="social-icon">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <!-- end of single item -->
            <!-- single item -->
            <li>
                <a href="https://www.twitter.com" class="social-icon">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
            <!-- end of single item -->
            <!-- single item -->
            <li>
                <a href="https://www.twitter.com" class="social-icon">
                    <i class="fab fa-squarespace"></i>
                </a>
            </li>
            <!-- end of single item -->
            <!-- single item -->
            <li>
                <a href="https://www.twitter.com" class="social-icon">
                    <i class="fab fa-behance"></i>
                </a>
            </li>
            <!-- end of single item -->
            <!-- single item -->
            <li>
                <a href="https://www.twitter.com" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <!-- end of single item -->
        </ul>

        <p>&copy; <span id="date"></span> All rights reserved.</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="./js/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>