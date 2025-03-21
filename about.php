<!doctype php>
<php lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">

    <title>Acerca</title>
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
            <section class="section single-page">
                <div class="section-title">
                    <h1>Acerca</h1>
                    <div class="underline"></div>
                </div>
                <div class="section-center page-info">
               <strong>Acerca de nosotros</strong><br/><br/>

Bienvenido a nuestro blog, tu fuente confiable de noticias e información actualizada. Nos apasiona brindar a nuestros lectores las últimas noticias sobre una amplia gama de temas, incluidos política, economía, tecnología, entretenimiento y más.<br/><br/>

<strong>Nuestra misión</strong><br/><br/>

Nuestra misión es ofrecer periodismo preciso, imparcial y de alta calidad. Nos esforzamos por presentar noticias de manera clara y concisa, permitiendo a nuestros lectores mantenerse informados sobre los eventos que dan forma a nuestro mundo.<br/><br/>

<strong>Nuestro equipo</strong><br/><br/>

Nuestro equipo está formado por periodistas experimentados y apasionados que se dedican a brindar noticias oportunas y relevantes. Estamos comprometidos con los principios del periodismo ético y nos esforzamos por mantener los más altos estándares de integridad.<br/><br/>

<strong>Que nos diferencia</strong><br/><br/>

Precisión: Verificamos rigurosamente nuestros hechos para garantizar que nuestras noticias sean precisas y confiables.
Imparcialidad: Presentamos las noticias de manera objetiva, sin prejuicios ni agendas ocultas.
Cobertura integral: Cubrimos una amplia gama de temas, brindando a nuestros lectores una visión completa del mundo que los rodea.
Compromiso con la calidad: Nos esforzamos por brindar noticias de alta calidad que sean informativas, atractivas y fáciles de leer.
Conéctate con nosotros<br/><br/>

Te invitamos a conectarte con nosotros en las redes sociales y suscribirte a nuestro boletín para recibir las últimas noticias directamente en tu bandeja de entrada. 1  Agradecemos tus comentarios y sugerencias, ya que nos ayudan a mejorar nuestro blog y brindar el mejor servicio posible a nuestros lectores. <br/>
                </div>
            </section>
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

        <p>&copy; <span id="date"></span>  All rights reserved.</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="./js/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</php>