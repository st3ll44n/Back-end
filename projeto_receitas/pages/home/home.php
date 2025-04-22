<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas Deliciosas</title>
    <!-- Link para o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        .hero-section {
            background: url('https://via.placeholder.com/1200x400?text=Imagem+de+Receita') no-repeat center center;
            background-size: cover;
            color: grey;
            padding: 100px 0;
        }
        h1, p {
            color: black;
        }
        .recipe-card img {
            height: 200px;
            object-fit: cover;
        }
        .category-card {
            background-color: #f8f9fa;
            padding: 20px;
            margin: 10px 0;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .carousel-custom {
        height: 300px;
        overflow: hidden;
        }   
        .carousel-custom img {
            height: 100%;
            object-fit: cover;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Hero Section com Carrossel Reduzido ao lado -->
    <div class="container-fluid hero-section text-white">
        <div class="row align-items-center">
            <!-- Texto do Hero -->
            <div class="col-md-6 text-center text-md-start p-5">
                <h1>Descubra Receitas Deliciosas!</h1>
                <p>Explore nossa coleção de receitas incríveis para todas as ocasiões.</p>
                <a href="index.php?menu=lista" class="btn btn-light">Ver Receitas</a>
            </div>

            <!-- Carrossel de Imagens -->
            <div class="col-md-6 p-4">
                <div id="carouselReceitas" class="carousel slide carousel-custom rounded shadow" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="pages/home/fotos.home/bolo_cenoura - Copia.jpeg" class="d-block w-100" alt="Bolo de Cenoura">
                        </div>
                        <div class="carousel-item">
                            <img src="pages/home/fotos.home/frango_curry.png.png" class="d-block w-100" alt="Frango ao Curry">
                        </div>
                        <div class="carousel-item">
                            <img src="pages/home/fotos.home/mousse.jpg" class="d-block w-100" alt="Mousse de Limão">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselReceitas" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselReceitas" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Categorias de Receitas -->
    <div class="container mt-5">
        <h2 class="text-center">Categorias Populares</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="category-card">
                    <h4>Entrada</h4>
                    <p>Deliciosas opções para começar sua refeição.</p>
                    <a href="" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <h4>Prato Principal</h4>
                    <p>Pratos principais que vão agradar a todos.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <h4>Sobremesas</h4>
                    <p>Adoce seu dia com nossas sobremesas incríveis.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Receitas em Destaque -->
    <div class="container mt-5" id="receitas">
        <h2 class="text-center">Receitas em Destaque</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card recipe-card">
                    <img src="pages/home/fotos.home/bolo_cenoura.jpeg" class="card-img-top" alt="Receita 1">
                    <div class="card-body">
                        <h5 class="card-title">Bolo de Cenoura com Cobertura</h5>
                        <p class="card-text">Um clássico da culinária brasileira, fofinho e com uma cobertura deliciosa de chocolate.</p>
                        <a href="index.php?menu=receita" class="btn btn-primary">Ver Receita</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card recipe-card">
                    <img src="pages/home/fotos.home/frango_curry.png.png" class="card-img-top" alt="Receita 2">
                    <div class="card-body">
                        <h5 class="card-title">Frango ao Curry</h5>
                        <p class="card-text">Frango suculento cozido em molho de curry com leite de coco.</p>
                        <a href="index.php?menu=receita2" class="btn btn-primary">Ver Receita</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card recipe-card">
                    <img src="pages/home/fotos.home/mousse_limao.jpeg" class="card-img-top" alt="Receita 3">
                    <div class="card-body">
                        <h5 class="card-title">Mousse de Limão Cremoso</h5>
                        <p class="card-text">Uma sobremesa rápida, refrescante e fácil de fazer, com sabor marcante de limão.</p>
                        <a href="index.php?menu=receita1" class="btn btn-primary">Ver Receita</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>