public class Conta {
    // Atributos da classe
    double saldo;
    String numAgencia;
    String titular;
    String numConta;
    int codBanco;

    // Construtor
    public Conta(double saldo, String nrAgencia, String titular, String nrConta, int codBanco) {
        this.saldo = saldo;
        this.numAgencia = numAgencia;
        this.titular = titular;
        this.numConta = numConta;
        this.codBanco = codBanco;
    }
    public void saque(double valor) {
        if (valor > 0) {
            if (valor <= saldo) {
                saldo -= valor; 
                System.out.println("Saque de R$ " + valor + " realizado com sucesso!");
            } else {
                System.out.println("Saldo insuficiente para realizar o saque.");
            }
        } else {
            System.out.println("Valor de saque inválido. O valor deve ser positivo.");
        }
    }
    public void deposito(double valor) {
        if (valor > 0) {  
            saldo += valor; 
            System.out.println("Depósito de R$ " + valor + " realizado com sucesso!");
        } else {
            System.out.println("Valor de depósito inválido. O valor deve ser positivo.");
        }
    }

    public void imprimeDados() {
        System.out.println("\n----------------------------");
        System.out.println("AGÊNCIA:\t" + numAgencia + "\t BANCO:\t" + codBanco);
        System.out.println("CONTA:\t" + numConta);
        System.out.println("TITULAR:\t" + titular);
        System.out.println("SALDO:\t" + saldo);
        System.out.println("-----------------------------\n");
    }
    public double getSaldo() {
        return saldo;
    }
}
