#include <stdio.h>
#include <stdlib.h>

int main(){
	int cub [5] [5] [5];
	int i, j, k;
	
	for(i = 0; i < 5; i++){
		for(j = 0; j < 5; j++){
			for(k = 0; k < 5; k++){
				if((i == j) && (j== k)){
					cub [i] [j] [k] = 1;
				} else {
					cub [i] [j] [k] = 0;
				}
			}
		}
	}
	for(i = 0; i <5; i++){
		for(j = 0; j < 5; j++){
			for(k = 0; k < 5; k++){
				printf("%d", cub[i][j][k]);
			}
		}
		printf("\n");
	}
	system("pause");
	return 0;
}
//toda main tem return 0, pois é um procedimento e procedimentos n retornam nada
