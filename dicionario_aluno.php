<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    
    <title>Index</title>

    
  <nav class="navbar navbar-expand-lg " style="background-color:#6C63FF;min-height:5rem;">
  <div class="container-fluid">
    <a class="navbar-brand text-light " style="margin-left:4rem;" href="#">Dicionário português</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
       

       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2"style="min-width:55rem;" type="search" placeholder="Pesquise uma palavra..." aria-label="Search"/>
        <button class="btn " style="background-color:#E8E7FF;margin-right:10rem;" type="submit">Buscar</button>
      </form>
       <a class="bnt bnt-outline-success nav-link text-light " style="margin-right:3rem;" href="api/logout.php">Sair</a>

    </div>
  </div>
</nav>


<nav aria-label="Page navigation example"  >
<ul class="pagination flex-wrap justify-content-center">
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="A">A</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="B">B</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="C">C</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="D">D</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="E">E</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="F">F</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="G">G</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="H">H</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="I">I</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="J">J</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="K">K</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="L">L</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="M">M</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="N">N</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="O">O</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="P">P</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="Q">Q</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="R">R</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="S">S</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="T">T</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="U">U</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="V">V</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="W">W</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="X">X</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="Y">Y</a></li>
    <li class="page-item"><a class="page-link filtro-letra" href="#" data-letra="Z">Z</a></li>
</ul>
</nav>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        
        <nav class="col-md-3 col-lg-2 d-none d-md-block sidebar shadow-sm">
            <div class="position-sticky pt-4">
                <h5 class="px-3 mb-3 text-muted">Navegação</h5>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action active-custom">
                        <i class="bi bi-house-door me-2"></i> Início
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="bi bi-book me-2"></i> Português
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="bi bi-calculator me-2"></i> Matemática
                    </a>
                   
                </div>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            
          <div class="container">
    <button type="button" class="btn btn-primary" style="margin-left:2rem; margin-top:2rem;" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Adicionar +
</button>
    
  <div class="card-body"  id="palavras"style="max-width:50rem; margin-left:2rem; margin-top:2rem; " >
    <h5 class="card-title"></h5>
    <p class="card-text fst-italic"> </p>
    <img src="..." class="card-img-top" alt="...">
    </div>
</div>
 

                
             
            
        </main>
    </div>
</div>




</body>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicione uma palavra ou termo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">Nome</span>
        <input type="text" id="add_nome" class="form-control">
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">Descrição</span>
        <input type="text" id="add_descricao" class="form-control">
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">Exemplo</span>
        <input type="text" id="add_exemplo" class="form-control">
    </div>

    <select id="add_categoria" class="form-select">
        <option selected>Selecione a categoria</option>
        <option value="Português">Português</option>
    <option value="Matemática">Matemática</option>
      
    </select>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
    <button type="button" id="btnSalvar" class="btn btn-primary">Salvar</button>
</div>
    </div>
  </div>
</div>
 <script>
        
        async function carregarPalavra() {
    try {
        const res = await fetch(`api/api_palavras.php`);
        const resultado = await res.json();
        const container = document.getElementById('palavras');

        if (resultado.success) {
            // 'p' é cada palavra que vem do banco
            container.innerHTML = resultado.data.map(p => `
                <div class="card shadow-sm mb-3" style="max-width:50rem; margin-left:2rem;">
                    <div class="card-body">
                        <h5 class="card-title text-primary">${p.nome_palavra}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">${p.categoria_palavra}</h6>
                        <p class="card-text">${p.descricao_palavra}</p>
                         <p class="card-text fst-italic">${p.exemplo_palavra}</p>
                        
                    </div>
                </div>
            `).join('');
        }
    } catch (error) {
        console.error("Erro ao carregar:", error);
    }
}

carregarPalavra();
    </script>

<!-- modal  -->

<script>

    // Carrega Blocos e Tipos ao iniciar
      


document.getElementById('btnSalvar').onclick = async function() {
    // 1. Captura os valores dos campos do modal
    const dados = {
        nome_palavra: document.getElementById('add_nome').value,
        descricao_palavra: document.getElementById('add_descricao').value,
        categoria_palavra: document.getElementById('add_categoria').value, // Pega o valor do Select
        exemplo_palavra: document.getElementById('add_exemplo').value
    };

    // 2. Validação básica
    if (!dados.nome_palavra || !dados.categoria_palavra) {
        alert("Por favor, preencha o nome e selecione uma categoria.");
        return;
    }

    try {
        const response = await fetch('api/api_palavras.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(dados)
        });

        const result = await response.json();

        if (result.success) {
            alert("Palavra criada com sucesso!");
            
            // Fechar o modal e limpar campos
            const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
            modal.hide();
            
            // Limpar os inputs
            document.getElementById('add_nome').value = '';
            document.getElementById('add_descricao').value = '';
            document.getElementById('add_exemplo').value = '';
            document.getElementById('add_categoria').value = '';

            // Atualiza a lista de cards na tela principal
            carregarPalavra(); 
        } else {
            alert("Erro: " + result.message);
        }
    } catch (error) {
        console.error("Erro ao enviar:", error);
    }
};
 </script>

 <!-- filtrando palavras -->

 <script>
  // Espera o site carregar completamente
document.addEventListener('DOMContentLoaded', () => {

    // 1. Seleciona todos os links que têm a classe 'filtro-letra'
    const botoesLetras = document.querySelectorAll('.filtro-letra');

    botoesLetras.forEach(botao => {
        botao.addEventListener('click', async (e) => {
            e.preventDefault(); // Impede a página de recarregar

            // 2. Pega a letra que está no 'data-letra' do HTML
            const letraSelecionada = e.target.getAttribute('data-letra');

            // 3. Faz a chamada para a sua API enviando a letra na URL
            try {
                const response = await fetch(`api/api_filtrar.php?letra=${letraSelecionada}`);
                const resultado = await response.json();

                // 4. Manda renderizar os cards com o resultado filtrado
                atualizarTela(resultado.data);
            } catch (error) {
                console.error("Erro ao filtrar:", error);
            }
        });
    });
});

// Função auxiliar para desenhar os cards na tela
function atualizarTela(listaDePalavras) {
    const container = document.getElementById('palavras');
    
    // Se não voltar nada do banco, mostra um aviso
    if (listaDePalavras.length === 0) {
        container.innerHTML = '<p class="text-muted ms-4">Nenhuma palavra encontrada com esta inicial.</p>';
        return;
    }

    // Mapeia os dados para o formato de Card do Bootstrap
    container.innerHTML = listaDePalavras.map(p => `
        <div class="card shadow-sm mb-3" style="max-width:50rem; margin-left:2rem;">
            <div class="card-body">
                <h5 class="card-title text-primary">${p.nome_palavra}</h5>
                <p class="card-text">${p.descricao_palavra}</p>
                <small class="text-muted fst-italic">${p.categoria_palavra || ''}</small>
            </div>
        </div>
    `).join('');
}
 </script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>

