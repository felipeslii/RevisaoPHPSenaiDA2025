abstract class Veiculo {
    // Velocidade
    abstract void velocidadeMaxima(int velocidadeMaxima);
    // Ignição
    abstract void ligado();
    // Especificações
    abstract void modelo(String modelo);
    abstract void cor(String cor);
    abstract void ano(int ano);
    abstract void marca(String marca);
    abstract void cavalos(int cavalos);
    abstract void Motor(String motor);
}

// Classe concreta Toyota
class Toyota extends Veiculo {
    void velocidadeMaxima(int velocidadeMaxima) {
        System.out.println("A velocidade máxima é: " + velocidadeMaxima + " km/h");
    }

    void ligado() {
        System.out.println("a ignição está ligada!");
    }

    void modelo(String modelo) {
        System.out.println("Modelo: " + modelo);
    }

    void cor(String cor) {
        System.out.println("Cor: " + cor);
    }

    void ano(int ano) {
        System.out.println("Ano: " + ano);
    }

    void marca(String marca) {
        System.out.println("Marca: " + marca);
    }

    void cavalos(int cavalos) {
        System.out.println("Potência: " + cavalos + " cv");
    }

    void Motor(String motor) {
        System.out.println("Motor: " + motor);
    }
}

// Classe concreta Chevrolet
class Chevrolet extends Veiculo {
    void velocidadeMaxima(int velocidadeMaxima) {
        System.out.println("A velocidade máxima é: " + velocidadeMaxima + " km/h");
    }

    void ligado() {
        System.out.println("a ignição está ligada!");
    }

    void modelo(String modelo) {
        System.out.println("Modelo: " + modelo);
    }

    void cor(String cor) {
        System.out.println("Cor: " + cor);
    }

    void ano(int ano) {
        System.out.println("Ano: " + ano);
    }

    void marca(String marca) {
        System.out.println("Marca: " + marca);
    }

    void cavalos(int cavalos) {
        System.out.println("Potência: " + cavalos + " cv");
    }

    void Motor(String motor) {
        System.out.println("Motor: " + motor);
    }
}

// Classe concreta Ferrari
class Ferrari extends Veiculo {
    void velocidadeMaxima(int velocidadeMaxima) {
        System.out.println("A Velocidade máxima é: " + velocidadeMaxima + " km/h");
    }

    void ligado() {
        System.out.println("a ignição está ligada!");
    }

    void modelo(String modelo) {
        System.out.println("Modelo: " + modelo);
    }

    void cor(String cor) {
        System.out.println("Cor: " + cor);
    }

    void ano(int ano) {
        System.out.println("Ano: " + ano);
    }

    void marca(String marca) {
        System.out.println("Marca: " + marca);
    }

    void cavalos(int cavalos) {
        System.out.println("Potência: " + cavalos + " cv");
    }

    void Motor(String motor) {
        System.out.println("Motor: " + motor);
    }
}

public class Main {
    public static void main(String[] args) {
        // Criando objetos das classes concretas
        Veiculo supra = new Toyota();
        Veiculo omega = new Chevrolet();
        Veiculo ferrari = new Ferrari();

        // Exibindo informações do Toyota Supra
        System.out.println("Informações do Toyota Supra:");
        supra.modelo("Supra MK4");
        supra.velocidadeMaxima(285);
        supra.ligado();
        supra.cor("Azul");
        supra.ano(1994);
        supra.marca("Toyota");
        supra.cavalos(280);
        supra.Motor("3.0 Turbo");

        System.out.println();

        // Exibindo informações do Chevrolet Omega
        System.out.println("Informações do Chevrolet Omega:");
        omega.modelo("Omega CD Fittipaldi");
        omega.velocidadeMaxima(235);
        omega.ligado();
        omega.cor("Preto");
        omega.ano(2011);
        omega.marca("Chevrolet");
        omega.cavalos(292);
        omega.Motor("V6 3.6 litros SIDI");

        System.out.println();

        // Exibindo informações da Ferrari 458
        System.out.println("Informações da Ferrari 458:");
        ferrari.modelo("Ferrari 458");
        ferrari.velocidadeMaxima(330);
        ferrari.ligado();
        ferrari.cor("Vermelha");
        ferrari.ano(2015);
        ferrari.marca("Ferrari");
        ferrari.cavalos(670);
        ferrari.Motor("V8 3.9 litros");
    }
}