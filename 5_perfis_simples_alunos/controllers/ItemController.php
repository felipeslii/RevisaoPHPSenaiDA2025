<?php

// Controller (Para itens)
class ItemController {
    public function listar() {
        require_once 'models/Item.php';
        $itens = Item::buscarTodos();

        require_once 'views/lista.php';
        renderizarLista($itens);
    }

    // Exibe detalhes de um item
    public function visualizar($id) {
        if (!Auth::temPermissao('visualizar')) {
            $_SESSION['mensagem'] = 'Você não tem permissão para visualizar itens.';
            header('Location: index.php?pagina=lista');
            exit;

        }

        require_once 'models/Item.php';
        $item = Item::buscarPorId($id);

        if (!$item) {
            $_SESSION['mensagem'] = 'Item não encontrado.';
            header('Location: index.php?pagina=lista');
            exit;
        }

        require_once 'views/visualizar.php';
        renderizarVisualizar($item);
    }
}