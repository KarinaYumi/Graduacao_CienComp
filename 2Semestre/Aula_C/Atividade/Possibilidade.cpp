//E uma empresa há 6 candidatos à gestão da instituição, e dois serão
//selecionados para os cargos de diretor e vice-diretor. Sabendo que eles
//serão eleitos por votação, qual é a quantidade de resultados possíveis?

#include <stdio.h>

int fatorial(int num){
	int resultado = 1; 
	int i;
	for (i = 1; i <=num; i++){
		resultado *=i;
	}
	return resultado;
}

int arranjo(int n, int k){
	return fatorial(n)/ fatorial(n-k);
}

int main(){
	int n = 6;
	int k = 2;
	int resultado = arranjo(n, k);
	printf("O resultado de números possíveis é de: %d\n", resultado);
	return 0;
}
