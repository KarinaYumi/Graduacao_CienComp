#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <math.h>

float calcula(float x, float y, float z){
	return (pow(x,2)+(y+z));
}

main(){
	int x;
	float vet[3];
	
	for(x=0; x <=2; x++){
		printf("\n[%d] digite um numero: ",x);
		scanf("%f", &vet[x]);
	}
	printf("\n\n Resultado: %3.2fn", calcula(vet[0], vet[1], vet[2]));
	printf("\n\n");
	system("pause");
	
	return(0);
}
