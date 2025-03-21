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

    <title>Blog</title>
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

    <?php
// API Key y URL de la API
$apiKey = "913b1c3566c1484289086b48507a4775";
$apiUrl = "https://newsapi.org/v2/top-headlines?country=us&category=general&apiKey=$apiKey";

// Inicializar cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: MyBlogApp/1.0'
]);

// Ejecutar la solicitud
$response = curl_exec($ch);

// Verificar si hubo errores
if (curl_errno($ch)) {
    echo "<p>Error al conectar con la API: " . curl_error($ch) . "</p>";
    $articles = [];
} else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode == 200) {
        $newsData = json_decode($response, true);
        $articles = $newsData['articles'] ?? [];
    } else {
        echo "<p>Error: La API devolvió el código HTTP $httpCode</p>";
        $articles = [];
    }
}

// Cerrar cURL
curl_close($ch);
?>

<div class="banner">
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php foreach ($articles as $index => $article): ?>
                    <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $index; ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
                <?php endforeach; ?>
            </ol>
            <div class="carousel-inner">
                <?php foreach ($articles as $index => $article): ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <section>
                            <div class="section-center clearfix">
                                <!-- banner-img -->
                                <article class="banner-img">
                                    <div class="banner-picture-container">
                                        <img src="<?php echo $article['urlToImage'] ?? './img/default.jpg'; ?>" alt="Article Image" class="banner-picture" />
                                    </div>
                                </article>
                                <!-- banner-info -->
                                <article class="banner-info">
                                    <!-- section title -->
                                    <div class="">
                                        <h3><?php echo $article['source']['name'] ?? 'Unknown Source'; ?></h3>
                                        <h2><?php echo $article['title'] ?? 'No Title'; ?></h2>
                                    </div>
                                    <!-- end of section title -->
                                    <p class="banner-text">
                                        <?php echo $article['description'] ?? 'No description available.'; ?>
                                    </p>
                                    <a href="<?php echo $article['url']; ?>" class="btn" target="_blank">Leer más</a>
                                </article>
                            </div>
                        </section>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previo</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</div>

<?php
// API Key y URL de la API
$apiKey = "913b1c3566c1484289086b48507a4775";
$apiUrl = "https://newsapi.org/v2/top-headlines?country=us&category=general&apiKey=$apiKey";

// Inicializar cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: MyBlogApp/1.0'
]);

// Ejecutar la solicitud
$response = curl_exec($ch);

// Verificar si hubo errores
if (curl_errno($ch)) {
    echo "<p>Error al conectar con la API: " . curl_error($ch) . "</p>";
    $articles = [];
} else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode == 200) {
        $newsData = json_decode($response, true);
        $articles = $newsData['articles'] ?? [];
    } else {
        echo "<p>Error: La API devolvió el código HTTP $httpCode</p>";
        $articles = [];
    }
}

// Cerrar cURL
curl_close($ch);
?>

    <!-- popular post -->
    <div class="popular-post">
    <div class="container">
        <!-- popular post -->
        <section class="section projects">
            <!-- section title -->
            <div class="section-title">
                <h2>Publicaciones populares</h2>
                <div class="underline"></div>
            </div>
            <!-- end of section title -->
            <div class="section-center projects-center">
                <?php foreach ($articles as $index => $article): ?>
                    <?php if ($index < 4): // Mostrar solo las primeras 4 publicaciones ?>
                        <a href="<?php echo $article['url']; ?>" class="project-<?php echo $index + 1; ?>" target="_blank">
                            <article class="project">
                                <img src="<?php echo $article['urlToImage'] ?? './img/default.jpg'; ?>" alt="Article Image" class="project-img" />
                                <div class="project-info">
                                    <h4><?php echo $article['title'] ?? 'Sin título'; ?></h4>
                                    <p><?php echo $article['source']['name'] ?? 'Fuente desconocida'; ?></p>
                                </div>
                            </article>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- end of projects -->
    </div>
</div>

    <!-- Categori list -->
    <div class="categori-list">
    <div class="container">
        <section class="section bg-grey">
            <div class="section-title mt-5">
                <h2>Categories</h2>
                <div class="underline"></div>
            </div>
            <div class="section-center services-center">
                <?php
                // Lista de categorías predefinidas
                $categories = ['business', 'entertainment', 'general', 'health', 'science', 'sports', 'technology'];

                // Mostrar las categorías
                foreach ($categories as $category): ?>
                    <!-- single service category -->
                    <article class="service">
                        <a href="category.php?category=<?php echo urlencode($category); ?>">
                            <i class="fas fa-folder ser-icon"></i>
                            <h4><?php echo ucfirst($category); ?></h4>
                            <div class="underline"></div>
                            <p>
                                Explore articles from the <?php echo ucfirst($category); ?> category.
                            </p>
                        </a>
                    </article>
                    <!-- end of single service category -->
                <?php endforeach; ?>
            </div>
        </section>
        <!-- end of services category -->
    </div>
</div>
</div>
    <!-- end categori list -->

    <!-- Blog -->
    <div class="blog">
    <div class="container">
        <div class="row">
            <div class="section-title mt-5">
                <h2>Todos los post</h2>
                <div class="underline"></div>
            </div>
            <div class="mb-5">
                <!-- featured blogs -->
                <section class="section" id="featured">
                    <!-- featured-center -->
                    <div class="section-center featured-center">
                        <div class="row justify-content-start">
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
                                                    <h4><?php echo $article['title'] ?? 'No Title'; ?></h4>
                                                </a>
                                                <a href="#">
                                                    <p><?php echo $article['source']['name'] ?? 'Unknown Source'; ?></p>
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
                                                    <p>Read More...</p>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- end of single blog -->
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- end of blogs center -->
                    
                </section>
                <!-- end of featured blogs -->
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