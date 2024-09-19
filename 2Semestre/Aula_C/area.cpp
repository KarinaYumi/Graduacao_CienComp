#include <stdio.h>
#include <stdlib.h>
#include <conio.h>
#include <math.h>

main()
{
	float r, a, c;
		printf("\n");
		//Comando pro usuário - Pedindo o valor do raio
		printf("Digite o valor do raio : ");
		scanf("%3f",&r);
		a = 3.14*r*r;
		c = 2*3.14*r;
		//Retorno do resultado
		printf("Área = %3.2f",a);
		printf("\n");
		printf("Comprimento: %3.2f",c);
		//Comandos C
		printf("\n Pressione alguma tecla para encerrar");
		system("PAUSE");
	return 0;
	
}
