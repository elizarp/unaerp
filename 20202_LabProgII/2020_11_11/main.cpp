#include <stdio.h>
#include <stdlib.h>
#include "bibCorrida.h"

int main() {
	
	
	// todo
	
	// menu
	
	// execucao menu///// .... funcoes ( biblioteca ) 
	TCorrida corrida;
	printf("---- Sistema de Corrida ----");
	
	addPiloto(&corrida);
	
	printf("\n Codigo: %d - %s", corrida.pilotos[0].piloto, corrida.pilotos[0].desc);

	return 0;

}
