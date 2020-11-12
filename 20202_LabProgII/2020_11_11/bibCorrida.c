#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "bibCorrida.h"

TPiloto getPiloto(){
	TPiloto p;
	system("CLS");
	printf("\n-------- Informe os dados do Piloto:");
	printf("\n Codigo: ");
	scanf("%d", &p.piloto);
	fflush(stdin);
	printf("\n Descricao: ");
	gets(p.desc);
	
	return p;
};

void addPiloto(TCorrida *corrida){
	
	if ((*corrida).qPiloto >= 10){
		printf("\n Qtd de pilotos completa");
	} else {
		(*corrida).pilotos[(*corrida).qPiloto] = getPiloto();
		(*corrida).qPiloto += 1;
		printf("\n Cadastro de Piloto com sucesso\n");
		system("PAUSE");
	}
	
};



