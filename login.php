<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e0f2f1; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-card { background: white; border-radius: 15px; width: 100%; max-width: 400px; }
        .btn-entrar { background-color: #00acc1; color: white; width: 100%; border: none; padding: 10px; border-radius: 5px; }
        .btn-entrar:hover { background-color: #00838f; color: white; }
    </style>
</head>
<body>

    <div class="login-card p-4 shadow-lg">
        <div class="text-center mb-4">
            <h3 class="mt-2">Dicionário escolar</h3>
            <p class="text-muted small">Aprender mais, para formar bem!</p>
        </div>

        <form id="formLogin" >
            
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" required>
            </div>

            <div class="mb-3">
                <select name="nome" class="form-select" id="nome" required>
                    <option value="" selected disabled>Selecione uma opção</option>
                    <option value="aluno">Sou aluno</option>
                    <option value="0">Sou professor</option>
                </select>
            </div>

            <button type="submit" class="btn-entrar">Entrar</button>
            <div id="mensagem"></div>
        </form>
    </div>
<script src="js/arquivo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 
</body>

<script>



document.getElementById('formLogin').addEventListener('submit', async (e) => {
     
console.log("entrei");
    e.preventDefault();
    
    const nome = document.getElementById('nome').value;
    const senha = document.getElementById('senha').value;
    const msg = document.getElementById('mensagem');

    try {
        const response = await fetch('api/login.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ nome: nome, senha: senha })
        });

        // Debug: Veja o que o PHP está retornando no console do navegador (F12)
        const textoRetorno = await response.text();
        console.log("Resposta do Servidor:", textoRetorno);
        
        const result = JSON.parse(textoRetorno);

        if (result.success) {
            // Se o login funcionar, manda para o dashboard que criamos
            window.location.href = 'dicionario_aluno.php';
        } else {
            msg.innerText = result.message;
        }
    } catch (error) {
        console.error("Erro na requisição:", error);
        msg.innerText = "Erro ao conectar com o servidor.";
    }
});

    </script>
</html>