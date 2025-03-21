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

    <title>Login - Darisset</title>
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
                <li><a href="user.php">user</a></li>
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

    <div class="pb-5">
        <div class="container d-flex justify-content-center">
            <article class="contact-form">
                <h3>Login</h3>
                <p>if you don't have a registered account, you can register <a href="register.php">here!</a></p>
                <form>
                    <div class="form-group">
                        <!-- inputs -->
                        <input type="text" placeholder="username" class="form-control mb-3" name="username" />
                        <input type="password" placeholder="password" class="form-control mb-3" name="password1" />
                        <input type="password" name="password2" placeholder="confirmation" class="form-control mb-3">
                    </div>
                    <!-- button -->
                    <p><a href="#">Forgot password?</a> </p>
                    <button type="submit" class="contact-btn btn">login</button>
                </form>
            </article>
        </div>
    </div>

    <!-- newsletter -->
    <section class="section newsletter" id="newsletter">
        <div class="container section-center newsletter-center">
            <div class="newsletter-title">
                <h3>want latest post info and updates?</h3>
                <p>Sign up for newsletter and stay up to date</p>
            </div>
            <form class="newsletter-form">
                <input type="email" class="form-control" placeholder="your email" />
                <button type="submit" class="btn">submit</button>
            </form>
        </div>
    </section>
    <!-- end of newsletter -->

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

        <p>&copy; <span id="date"></span> Darisset. All rights reserved.</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="./js/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>