#include <stdio.h>

float calcularArea(float largura, float comprimento){
	return largura*comprimento;
}

int main(void){
	float larg, comp, area;
	
	printf("Digite a largura: ");
	scanf("%f", &larg);
	
	printf("Digite o comprimento: ");
	scanf("%f", &comp);
	
	area = calcularArea(larg, comp);
	printf("Area = %.2fm2 \n", area);
	
	return 0;
}
