#include <stdio.h>
#include <string.h>

int main(int argc, char* argv[]){ 
	
	char n1[128], n2[128];
		printf("Digite o primeiro nome: ");
		gets(n1);
		printf("Digite o segundo numero: ");
		gets(n2);
		
		if(strcmp(n1, n2) > 0){
			printf("\n %s \n %s", n2, n1);
		}else{
			printf("\n &s \n &s", n1, n2);
		}
		return 0;
}
