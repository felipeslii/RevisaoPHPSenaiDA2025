
<?php

// Classe abstrata Veiculo
abstract class Veiculo {
    protected string $modelo;
    protected string $placa;
    protected bool $disponivel;

    public function __construct(string $modelo, string $placa) {
        $this->modelo = $modelo;
        $this->placa = $placa;
        $this->disponivel = true;
    }

    abstract public function calcularAluguel(int $dias): float;

    public function isDisponivel(): bool {
        return $this->disponivel;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function getPlaca(): string {
        return $this->placa;
    }

    public function alugar(): bool {
        if ($this->disponivel) {
            $this->disponivel = false;
            return true;
        }
        return false;
    }

    public function devolver(): bool {
        if (!$this->disponivel) {
            $this->disponivel = true;
            return true;
        }
        return false;
    }
}

// Classe Carro
class Carro extends Veiculo {
    public function calcularAluguel(int $dias): float {
        return $dias * 100.0;
    }
}

// Classe Moto
class Moto extends Veiculo {
    public function calcularAluguel(int $dias): float {
        return $dias * 50.0;
    }
}

/// Classe Locadora
class Locadora {
    private array $veiculos = [];

    public function adicionarVeiculo(Veiculo $veiculo): void {
        $this->veiculos[] = $veiculo;
        
    }

    public function alugarVeiculo(string $modelo): void {
        foreach ($this->veiculos as $veiculo) {
            if ($veiculo->getModelo() === $modelo && $veiculo->isDisponivel()) {
                $veiculo->alugar();
                
                return;
            }
        }
        
    }

    public function devolverVeiculo(string $modelo): void {
        foreach ($this->veiculos as $veiculo) {
            if ($veiculo->getModelo() === $modelo && !$veiculo->isDisponivel()) {
                $veiculo->devolver();
                
                return;
            }
        }
    
    }
}

// Testes e Simulação
$locadora = new Locadora();

$carro = new Carro("HB20", "ABC-1234");
$moto = new Moto("Yamaha XTZ", "XYZ-5678");

$locadora->adicionarVeiculo($carro);
$locadora->adicionarVeiculo($moto);

$locadora->alugarVeiculo("HB20");
$locadora->alugarVeiculo("Yamaha XTZ");

$locadora->devolverVeiculo("HB20");


// Exibindo os resultados no navegador
echo "<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Resultados da Locadora</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        p { margin: 10px 0; }
        ul { list-style-type: none; padding: 0; }
        li { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Resultados da Locadora</h1>";

// Exibindo os dados do carro
echo "<p><strong>Carro:</strong></p>";
echo "<ul>";
echo "<li>Modelo: <strong>{$carro->getModelo()}</strong></li>";
echo "<li>Placa: <strong>{$carro->getPlaca()}</strong></li>";
echo "<li>Disponível: <strong>" . ($carro->isDisponivel() ? 'Sim' : 'Não') . "</strong></li>";
echo "<li>Valor do aluguel por 3 dias: <strong>R$" . number_format($carro->calcularAluguel(3), 2, ',', '.') . "</strong></li>";
echo "</ul>";

// Exibindo os dados da moto
echo "<p><strong>Moto:</strong></p>";
echo "<ul>";
echo "<li>Modelo: <strong>{$moto->getModelo()}</strong></li>";
echo "<li>Placa: <strong>{$moto->getPlaca()}</strong></li>";
echo "<li>Disponível: <strong>" . ($moto->isDisponivel() ? 'Sim' : 'Não') . "</strong></li>";
echo "<li>Valor do aluguel por 3 dias: <strong>R$" . number_format($moto->calcularAluguel(3), 2, ',', '.') . "</strong></li>";
echo "</ul>";

echo "</body>
</html>";