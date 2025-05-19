<?php

// Classe abstrata ItemBiblioteca
// Classe abstrata ItemBiblioteca
abstract class ItemBiblioteca {
    protected string $titulo;
    protected string $codigo;
    protected bool $disponivel;

    public function __construct(string $titulo, string $codigo) {
        $this->titulo = $titulo;
        $this->codigo = $codigo;
        $this->disponivel = true;
    }

    abstract public function calcular_multa(int $dias_atraso): float;

    public function emprestar(): bool {
        if ($this->disponivel) {
            $this->disponivel = false;
            return true;
        }
        return false;
    }

    public function devolver(): void {
        $this->disponivel = true;
    }

    public function esta_disponivel(): bool {
        return $this->disponivel;
    }

    public function get_titulo(): string {
        return $this->titulo;
    }

    // Novo método getter para acessar o código
    public function get_codigo(): string {
        return $this->codigo;
    }
}

// Classe Livro
class Livro extends ItemBiblioteca {
    public function calcular_multa(int $dias_atraso): float {
        return $dias_atraso * 0.50;
    }
}

// Classe Revista
class Revista extends ItemBiblioteca {
    public function calcular_multa(int $dias_atraso): float {
        return $dias_atraso * 0.25;
    }
}

// Classe Biblioteca
class Biblioteca {
    private array $itens = [];

    public function adicionar_item(ItemBiblioteca $item): void {
        $this->itens[$item->get_titulo()] = $item;
       
    }

    public function emprestar_item(string $titulo): void {
        if (isset($this->itens[$titulo]) && $this->itens[$titulo]->esta_disponivel()) {
            $this->itens[$titulo]->emprestar();
        }   
    }

    public function devolver_item(string $titulo): void {
        if (isset($this->itens[$titulo])) {
            $this->itens[$titulo]->devolver();
           
        }
    }

    private function get_tipo_item(ItemBiblioteca $item): string {
        return $item instanceof Livro ? "Livro" : "Revista";
    }
}

// Testes e Simulação
$biblioteca = new Biblioteca();

$livro = new Livro("Python para Iniciantes", "L001");
$revista = new Revista("TechNews", "R001");

$biblioteca->adicionar_item($livro);
$biblioteca->adicionar_item($revista);

$biblioteca->emprestar_item("Python para Iniciantes");
$biblioteca->emprestar_item("TechNews");

$biblioteca->devolver_item("Python para Iniciantes");


// Exibindo os resultados no navegador
echo "<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Resultados da Biblioteca</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        p { margin: 10px 0; }
        ul { list-style-type: none; padding: 0; }
        li { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Resultados da Biblioteca</h1>";

// Exibindo os dados do livro
echo "<p><strong>Livro:</strong></p>";
echo "<ul>";
echo "<li>Título: <strong>{$livro->get_titulo()}</strong></li>";
echo "<li>Código: <strong>{$livro->get_codigo()}</strong></li>";
echo "<li>Disponível: <strong>" . ($livro->esta_disponivel() ? 'Sim' : 'Não') . "</strong></li>";
echo "<li>Multa por 5 dias de atraso: <strong>R$" . number_format($livro->calcular_multa(5), 2, ',', '.') . "</strong></li>";
echo "</ul>";

// Exibindo os dados da revista
echo "<p><strong>Revista:</strong></p>";
echo "<ul>";
echo "<li>Título: <strong>{$revista->get_titulo()}</strong></li>";
echo "<li>Código: <strong>{$revista->get_codigo()}</strong></li>";
echo "<li>Disponível: <strong>" . ($revista->esta_disponivel() ? 'Sim' : 'Não') . "</strong></li>";
echo "<li>Multa por 5 dias de atraso: <strong>R$" . number_format($revista->calcular_multa(5), 2, ',', '.') . "</strong></li>";
echo "</ul>";

echo "</body>
</html>";

?>