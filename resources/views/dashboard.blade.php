<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGNL - Painel Administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-warning" href="#">SGNL Admin</a>
            <div class="navbar-nav me-auto">
                <a class="nav-link active" href="/admin">Dashboard</a>
                <a class="nav-link" href="#">Produtos</a>
                <a class="nav-link" href="#">Frente de Caixa (PDV)</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a class="btn btn-outline-warning btn-sm" href="/">Sair / Ver Vitrine</a>
            </div>
        </div>
    </nav>

    <main class="container my-4">
        <h2 class="mb-4 fw-bold">Resumo do Caixa Diário</h2>

        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card bg-white shadow-sm border-0 border-start border-primary border-4">
                    <div class="card-body">
                        <h6 class="text-muted text-uppercase small">Faturamento Hoje</h6>
                        <h3 class="fw-bold text-primary">R$ 350,00</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-white shadow-sm border-0 border-start border-success border-4">
                    <div class="card-body">
                        <h6 class="text-muted text-uppercase small">Vendas Realizadas</h6>
                        <h3 class="fw-bold text-success">42 pedidos</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-white shadow-sm border-0 border-start border-warning border-4">
                    <div class="card-body">
                        <h6 class="text-muted text-uppercase small">Produtos Ativos</h6>
                        <h3 class="fw-bold text-warning">15 itens</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-white fw-bold py-3">
                📋 Últimos Produtos Movimentados no Cardápio
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Item</th>
                                <th>Preço Base</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Coxinha de Frango</strong></td>
                                <td>R$ 6,00</td>
                                <td><span class="badge bg-success">Disponível</span></td>
                            </tr>
                            <tr>
                                <td><strong>Kibe Frito</strong></td>
                                <td>R$ 6,00</td>
                                <td><span class="badge bg-success">Disponível</span></td>
                            </tr>
                            <tr>
                                <td><strong>Suco de Laranja</strong></td>
                                <td>R$ 5,00</td>
                                <td><span class="badge bg-danger">Esgotado</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>
</html>