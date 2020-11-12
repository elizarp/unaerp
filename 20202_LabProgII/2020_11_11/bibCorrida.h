#ifndef _BIBCORRIDA_H
#define _BIBCORRIDA_


// declaracao tipos
typedef struct TPiloto {
	int piloto;
	char desc[20];
	float media;
	float menor;
	float maior;
	int qVolta = 0;
	float voltas[10];
};


typedef struct TCorrida {
	float media[10];
	float menor[10];
	float maior[10];
	int qPiloto = 0;
	TPiloto pilotos[10];
};


// assinatura de metodos 
TPiloto getPiloto();
void addPiloto(TCorrida *corrida);

#endif /*BIBCORRIDA_H*/
