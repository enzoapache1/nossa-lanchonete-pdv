<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa Lanchonete - Cardápio Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-salgado { transition: transform 0.2s; }
        .card-salgado:hover { transform: scale(1.05); }
    </style>
</head>
<body class="bg-light">

    <header class="text-center py-5" style="background-color: #fdab4f;">
        <div class="container">
            <img src="{{ asset('logo.png') }}" alt="Nossa Lanchonete" class="img-fluid mb-4 shadow rounded" style="max-height: 350px;">
            <br>
            <a href="#cardapio" class="btn btn-light btn-lg fw-bold text-dark shadow-sm">Ver Cardápio</a>
            <a href="/admin" class="btn btn-dark btn-lg ms-2 shadow-sm">Acessar Sistema (Restrito)</a>
        </div>
    </header>

    <section id="cardapio" class="container my-5">
        <h2 class="text-center mb-4 fw-bold">🔥 Nosso Cardápio Atualizado</h2>
        <div class="row g-4">
            
            @forelse($produtos as $produto)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm card-salgado">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">{{ $produto->name }}</h5>
                            <p class="card-text text-muted">{{ $produto->description ?? 'Salgado fresquinho e frito na hora.' }}</p>
                            <h4 class="text-success fw-bold">R$ {{ number_format($produto->price, 2, ',', '.') }}</h4>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-5">
                    <p class="lead">Estamos preparando os salgados. Volte em breve!</p>
                </div>
            @endforelse

        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2026 Nossa Lanchonete - Todos os direitos reservados.</p>
    </footer>

</body>
</html>