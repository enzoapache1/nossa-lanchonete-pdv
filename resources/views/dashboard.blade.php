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
                        <h3 class="fw-bold text-primary">R$ 0,00</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-white shadow-sm border-0 border-start border-success border-4">
                    <div class="card-body">
                        <h6 class="text-muted text-uppercase small">Vendas Realizadas</h6>
                        <h3 class="fw-bold text-success">0 pedidos</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-white shadow-sm border-0 border-start border-warning border-4">
                    <div class="card-body">
                        <h6 class="text-muted text-uppercase small">Produtos Ativos</h6>
                        <h3 class="fw-bold text-warning">{{ $produtos->count() }} itens</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-warning fw-bold">➕ Novo Produto</div>
                    <div class="card-body">
                        <form action="/admin/produto" method="POST">
                            @csrf <div class="mb-3">
                                <label class="form-label">Nome (Ex: Empada)</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Preço (Ex: 7.50)</label>
                                <input type="number" step="0.01" name="price" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Descrição</label>
                                <textarea name="description" class="form-control" rows="2"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Salvar Produto</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white fw-bold py-3">📋 Cardápio Cadastrado no Banco</div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Item</th>
                                        <th>Preço</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($produtos as $produto)
                                    <tr>
                                        <td>{{ $produto->id }}</td>
                                        <td><strong>{{ $produto->name }}</strong></td>
                                        <td>R$ {{ number_format($produto->price, 2, ',', '.') }}</td>
                                        <td>
                                            @if($produto->is_active)
                                                <span class="badge bg-success">Disponível</span>
                                            @else
                                                <span class="badge bg-danger">Esgotado</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted py-3">Nenhum produto cadastrado ainda.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

</body>
</html>