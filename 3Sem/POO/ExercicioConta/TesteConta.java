public class TesteConta {
    public static void main(String[] args) {
        Conta minhaConta = new Conta(1000.0, "1234", "Karina Yumi", "56789", 123);

        minhaConta.imprimeDados();
        minhaConta.saque(200.0);
        minhaConta.imprimeDados();
        minhaConta.deposito(500.0);
        minhaConta.imprimeDados();
        System.out.println("Saldo atual da conta: R$ " + minhaConta.getSaldo());
    }
}
