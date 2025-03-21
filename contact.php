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

    <title>Contacto </title>
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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Acerca</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <div class="dropdown">
                    <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-expanded="false">
                        Blog
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="blog.php">Blog</a></li>
                        <li><a class="dropdown-item" href="category.php?category=business">Negocios</a></li>
                        <li><a class="dropdown-item" href="category.php?category=entretainment">Entretenimiento</a></li>
                        <li><a class="dropdown-item" href="category.php?category=general">General</a></li>
                        <li><a class="dropdown-item" href="category.php?category=health">Salud</a></li>
                        <li><a class="dropdown-item" href="category.php?category=science">Ciencia</a></li>
                        <li><a class="dropdown-item" href="category.php?category=sports">Deporte</a></li>
                        <li><a class="dropdown-item" href="category.php?category=technology">Tecnología</a></li>
                        
                    </ul>
                </div>
                <div class="dropdown">
                 

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

    <div class="blog pb-5">
        <div class="container">
            <!-- contact -->
            <div class="section-title">
                <h1>Contactanos</h1>
                <div class="underline"></div>
            </div>
            <section class="contact p-5">
                <div class="section-center clearfix">
                    <!-- contact info -->
                    <article class="contact-info">
                        <!-- contact item -->
                        <div class="contact-item">
                            <h4 class="contact-title">
                                <span class="contact-icon">
                                    <i class="fas fa-location-arrow"></i>
                                </span>
                                address
                            </h4>
                            <p class="contact-text">
                               Calle sucre, Venezuela<br />                                
                            </p>
                        </div>
                        <!-- end of contact item -->
                        <!-- contact item -->
                        <div class="contact-item">
                            <h4 class="contact-title">
                                <span class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                email
                            </h4>
                            <p class="contact-text">
                                empresa@gmail.com
                            </p>
                        </div>
                        <!-- end of contact item -->
                        <!-- contact item -->
                        <div class="contact-item">
                            <h4 class="contact-title">
                                <span class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </span>
                                telephone
                            </h4>
                            <p class="contact-text">
                                +52685958558544
                            </p>
                        </div>
                        <!-- end of contact item -->
                    </article>
                    <!-- contact form -->
                    <article class="contact-form">
                        <h3>Contacto</h3>
                        <form>
                            <div class="form-group">
                                <!-- inputs -->
                                <input type="text" placeholder="Nombre" class="form-control mb-3" name="name" />
                                <input type="email" placeholder="Email" class="form-control mb-3" name="email" />
                                <textarea name="message" placeholder="Mensaje" class="form-control mb-3"
                                    rows="5"></textarea>
                            </div>
                            <!-- button -->
                            <button type="submit" class="contact-btn btn">Enviar aquí</button>
                        </form>
                    </article>
                </div>
            </section>
            <!-- end of contact -->
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