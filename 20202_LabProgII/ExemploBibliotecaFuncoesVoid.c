#include <stdio.h>

typedef int t_ano, t_volume, t_quantidadePaginas;
typedef char t_cidade[50], t_editora[50], t_isbn[15], t_descricao[100], t_autor[100];

typedef struct  {
    t_ano ano;
    t_volume volume;
    t_cidade cidade;
    t_editora editora;
} t_publicacao;


typedef struct  {
    t_isbn isbn;
    t_descricao descricao;
    t_autor autor;
    t_quantidadePaginas quantidadePaginas;
    t_publicacao publicacao;
} t_titulo;

t_titulo vetorTitulos [100];
t_titulo novoTitulo;
int continuar = 1;
int ultimoTitulo = -1;
int indice = -1;

void incluirTitulo(){
    // Incluir titulo
    printf("Digite o nome do autor: ");
    scanf("%s", novoTitulo.autor);

    printf("Digite a descricao do título: ");
    scanf("%s", novoTitulo.descricao);

    printf("Digite a editora da publicacao: ");
    scanf("%s", novoTitulo.publicacao.editora);

    /*Adicionar demais campos*/

    ultimoTitulo++;

    vetorTitulos[ultimoTitulo] = novoTitulo;

    return;
}

void consultarTitulos(){
    printf("\nQual indice do titulo: ");
    scanf("%d", &indice);

    if (indice < 0 || indice > ultimoTitulo){
        printf("Indice invalido. ");
    } else {
        printf("\n###########\n Titulo %d \n Autor %s \n Descricao %s \n Editora %s",indice, vetorTitulos[indice].autor, vetorTitulos[indice].descricao, vetorTitulos[indice].publicacao.editora);
        /*Adicionar demais campos*/
    }
    return;
}

void listarTitulos(){
    for (int i = 0; i <= ultimoTitulo; ++i) {
        printf("\n###########\n Titulo %d \n Autor %s \n Descricao %s \n Editora %s",i, vetorTitulos[i].autor, vetorTitulos[i].descricao, vetorTitulos[i].publicacao.editora);
        /*Adicionar demais campos*/
    }
    return;
}

void sair(){
    printf("Ate mais...\n");
    return;
}

void exibeMenu(){
    do
    {
        printf("\n\t======== Biblioteca UNAERP ========\n\n");
        printf("1. Incluir Titulo\n");
        printf("2. Consultar Titulo\n");
        printf("3. Lista Titulos\n");
        printf("0. Sair\n");

        scanf("%d", &continuar);

        switch(continuar)
        {
            case 1:
                incluirTitulo();
                break;

            case 2:
                // Consultar Titulo
                consultarTitulos();
                break;

            case 3:
                // Listar titulos
                listarTitulos();
                break;

            case 0:
                sair();
                break;

            default:
                printf("Digite uma opcao valida\n");
        }
    } while(continuar);
    return;
}

int main() {
    exibeMenu();
    return 0;
}
