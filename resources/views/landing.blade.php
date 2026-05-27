<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa Lanchonete - Cardápio Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=1000') no-repeat center center/cover; color: white; padding: 100px 0; }
        .card-salgado { transition: transform 0.2s; }
        .card-salgado:hover { transform: scale(1.05); }
    </style>
</head>
<body class="bg-light">

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Nossa Lanchonete</h1>
            <p class="lead">Os melhores salgados e coxinhas da região, sempre quentinhos!</p>
            <a href="#cardapio" class="btn btn-warning btn-lg fw-bold text-dark">Ver Cardápio</a>
            <a href="/admin" class="btn btn-outline-light btn-lg ms-2">Acessar Sistema (Restrito)</a>
        </div>
    </header>

    <section id="cardapio" class="container my-5">
        <h2 class="text-center mb-4 fw-bold">🔥 Mais Vendidos do Dia</h2>
        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="card h-100 shadow-sm card-salgado">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Coxinha de Frango</h5>
                        <p class="card-text text-muted">Massa de batata super cremosa com recheio de frango desfiado bem temperado.</p>
                        <h4 class="text-success fw-bold">R$ 6,00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm card-salgado">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Kibe Frito</h5>
                        <p class="card-text text-muted">Kibe tradicional frito na hora, crocante por fora e muito suculento por dentro.</p>
                        <h4 class="text-success fw-bold">R$ 6,00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm card-salgado">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Suco Natural (Laranja)</h5>
                        <p class="card-text text-muted">Suco natural da fruta geladinho para acompanhar o seu salgado.</p>
                        <h4 class="text-success fw-bold">R$ 5,00</h4>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2026 Nossa Lanchonete - Todos os direitos reservados.</p>
    </footer>

</body>
</html>