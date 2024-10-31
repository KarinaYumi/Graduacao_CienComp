//Implemente um algoritmo na linguagem C que encontre o quadrado de
//um número positivo

#include <stdio.h>

int quadrado(int n){
	int i;
	int resultado = 0;
	for(i = 0; i < n; i++){
		resultado += (2*i + 1);
	}
	return resultado;
}

int main(){
	int n;
	printf("Digite um número positivo: ");
	scanf("%d", &n);
	
	if(n > 0){
		int resultado = quadrado(n);
		printf("O quadrado de %d é: %d\n", n, resultado);
	}else{
		printf("Digite um número POSITIVO: ");
	}
	return 0;
}

