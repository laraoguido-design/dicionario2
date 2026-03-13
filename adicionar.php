<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
</head>
<body>
    <div class="modal fade" id="novasolicitacao" tabindex="-1">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Adiconar nova palavra</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>


                <form id="formPalavra">

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Bloco</label>

                                <select id="selectBloco" class="form-select" required
                                    onchange="carregarAmbientes(this.value)">
                                    <option>Carregando...</option>
                                </select>

                            </div>


                            <div class="col-md-6 mb-3">

                                <label class="form-label">Ambiente</label>

                                <select id="selectAmbiente" class="form-select" required>
                                    <option>Selecione um bloco primeiro</option>
                                </select>

                            </div>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">Descrição</label>

                            <textarea name="descricao" class="form-control" rows="3" required></textarea>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">Prioridade</label>

                            <select name="prioridade" class="form-select">

                                <option value="baixa">Baixa</option>
                                <option value="media">Média</option>
                                <option value="alta">Alta</option>
                                <option value="urgente">Urgente</option>

                            </select>

                        </div>

                    </div>


                    <div class="modal-footer">

                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancelar
                        </button>

                        <button class="btn btn-primary">
                            Salvar Chamado
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
</html>