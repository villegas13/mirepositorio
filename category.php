<?php 

if (isset($_GET['category'])) {
    $category = $_GET['category'];


}

?>

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

    <title>Categoría - <?php echo $category; ?></title>
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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Acerca</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="category.php">Categoria</a></li>                    y</a></li>
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

    <!-- Blog -->
    <div class="">
        <div class="container ">
            <div class="row">
                <div class="section-title mt-5">
                    <h2><?php echo $category; ?></h2>
                    <div class="underline"></div>
                </div>
                <div class="col-lg-8 mb-5">
                    <!-- featured blogs -->
                    <section class="section" id="featured">
                        <!-- featured-center -->
                        <?php
if (isset($_GET['category'])) {
    $category = $_GET['category'];

    // API Key y URL de la API
    $apiKey = "913b1c3566c1484289086b48507a4775";
    $apiUrl = "https://newsapi.org/v2/top-headlines?category=" . urlencode($category) . "&apiKey=$apiKey";

    // Inicializar cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Configurar el encabezado User-Agent
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'User-Agent: MyBlogApp/1.0'
    ]);

    // Ejecutar la solicitud
    $response = curl_exec($ch);

    // Verificar si hubo errores
    if (curl_errno($ch)) {
        echo "<p>Error al conectar con la API: " . curl_error($ch) . "</p>";
        $newsData = [];
    } else {
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpCode == 200) {
            $newsData = json_decode($response, true);
        } else {
            // Mostrar el mensaje de error devuelto por la API
            $errorMessage = json_decode($response, true)['message'] ?? 'Error desconocido';
            echo "<p>Error: La API devolvió el código HTTP $httpCode - $errorMessage</p>";
            $newsData = [];
        }
    }

    // Cerrar cURL
    curl_close($ch);

    // Verificar si la API devolvió artículos
    $articles = $newsData['articles'] ?? [];
} else {
    echo "<p>No se especificó ninguna categoría.</p>";
    $articles = [];
}
?>

<div class="section-center featured-center">
    <div class="row justify-content-start">
        <?php if (!empty($articles)): ?>
            <?php foreach ($articles as $article): ?>
                <div class="col-lg-6">
                    <!-- single blog -->
                    <article class="blog-card">
                        <div class="blog-img-container">
                            <a href="<?php echo $article['url']; ?>" target="_blank">
                                <img src="<?php echo $article['urlToImage'] ?? './img/default.jpg'; ?>" class="blog-img" alt="Article Image" />
                            </a>
                            <p class="blog-date"><?php echo date('F jS, Y', strtotime($article['publishedAt'])); ?></p>
                        </div>
                        <!-- blog info -->
                        <div class="blog-info">
                            <div class="blog-title">
                                <a href="<?php echo $article['url']; ?>" target="_blank">
                                    <h4><?php echo $article['title']; ?></h4>
                                </a>
                                <a href="#">
                                    <p><?php echo $article['source']['name']; ?></p>
                                </a>
                            </div>
                            <p>
                                <?php echo $article['description'] ?? 'No description available.'; ?>
                            </p>
                            <!-- blog footer -->
                            <div class="blog-footer">
                                <a href="#">
                                    <p>
                                        <span><i class="fas fa-user"></i></span> <?php echo $article['author'] ?? 'Unknown'; ?>
                                    </p>
                                </a>
                                <a href="<?php echo $article['url']; ?>" target="_blank">
                                    <p>Leer mais...</p>
                                </a>
                            </div>
                        </div>
                    </article>
                    <!-- end of single blog -->
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No articles found. Please try again later.</p>
        <?php endif; ?>
    </div>
</div>
                        <!-- end of blogs center -->
                        
                    </section>
                    <!-- end of featured blogs -->

                    
                    
                </div>

                <div class="col-lg-4">

                    <div class="sidebar-left">
                        <form class="d-flex">
                            <input class="form-control mr-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                    <!-- single card -->
                    <article class="sidebar-left">
                        <!-- img container -->
                        <div class="service-img-container">
                            <!-- img -->
                            <img src="./img/profil.png" class="service-img" alt="single service" />
                            <!-- service icon -->
                            <span class="service-icon">
                                <i class="fas fa-user fa-fw"></i>
                            </span>
                        </div>
                        <!-- service info -->
                        <div class="service-info">
                            <h4>Autor</h4>
                            <p>
                            El autor cree que el periodismo es esencial para una sociedad informada y comprometida. Se esfuerza por presentar las noticias de manera clara, concisa y atractiva, permitiendo a los lectores comprender los eventos que dan forma a nuestro mundo.
                            </p>
                            <a href="products.php" class="btn service-btn">read more</a>
                        </div>
                    </article>
                    <!--end of  single card -->

                    <div class="sidebar-left">
                        <h4 class="text-center">Seguirnos</h4>
                        <div class="underline"></div>
                        <ul class="social-icons" class="text-center">
                            <!-- single item -->
                            <li>
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

                    <article class="sidebar-left">
    <h4 class="text-center">Publicaciones Recientes</h4>
    <div class="underline"></div>
    <div class="pl-3 pr-3">
        <?php if (!empty($articles)): ?>
            <?php 
            // Filtrar los últimos 4 artículos publicados
            $latestArticles = array_slice($articles, 0, 4); 
            ?>
            <?php foreach ($latestArticles as $article): ?>
                <a href="<?php echo $article['url']; ?>" target="_blank" aria-current="true">
                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="<?php echo $article['urlToImage'] ?? './img/default.jpg'; ?>" class="thumbnail" alt="Article Image">
                        </div>
                        <div class="col-8 recent-post">
                            <h5><?php echo $article['title'] ?? 'No Title'; ?></h5>
                            <span><?php echo date('F jS, Y', strtotime($article['publishedAt'])); ?></span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No popular posts available at the moment.</p>
        <?php endif; ?>
    </div>
</article>

                    
                </div>

            </div>
        </div>
    </div>
    <!-- end blog -->




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