#include <stdio.h>

int main(int argc, char* argv[]){
	int matA[2][3], matB[2][3], matC[2][3], i, j;
	for(i = 0; i < 2; i++){
		for(j = 0; j < 3; j++){
			printf("Digite um valor para o %d elemento da linha %d, coluna %d da matriz A: ", j+1, i+1, j+1);
			scanf("%d", &matA[i][j]);
		}
	}
	printf("\n");
//Exibindo a matriz A na tela - Para mostrar cada elemento, preciso percorrer cada um, por isso o for do i e do j
	for(i = 0; i < 2; i++){
		for(j = 0; j < 3; j++){
			printf("%d\t", matA[i][j]);
		}
	printf("\n"); //Ele faz o for
	}
	
	printf("\n");
	for(i = 0; i < 2; i++){
		for(j = 0; j < 3; j++){
			printf("Digite um valor para o %d elemento da linha %d, coluna %d da matriz B: ", j+1, i+1, j+1);
			scanf("%d", &matB[i][j]);

		}
	}
	printf("\n");
//Exibindo a matriz A na tela

	for(i = 0; i < 2; i++){
		for(j = 0; j < 3; j++){
			printf("%d\t", matB[i][j]);
		}
	printf("\n");
	}
	
	printf("\nOs valores somados s�o: \n");
	for(i = 0; i < 2; i++){
		for(j = 0; j < 3; j++){
			matC[i][j] = matA[i][j] + matB[i][j];
			printf("%d\t", matC[i][j]);
		}
	printf("\n");
	}
	return 0;
	
}
