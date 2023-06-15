# A Linguagem de Programação do VisuAlg    


A linguagem que o VisuAlg interpreta é bem simples: é uma versão portuguesa dos pseudocódigos 
largamente utilizados nos livros de introdução à programação, conhecida como "Portugol". Tomei a 
liberdade de acrescentar-lhe alguns comandos novos, com o intuito de criar facilidades específicas 
para o ensino de técnicas de elaboração de algoritmos. Inicialmente, pensava em criar uma sintaxe 
muito simples e "liberal", para que o usuário se preocupasse apenas com a lógica da resolução dos 
problemas e não com as palavras-chave, pontos e vírgulas, etc. No entanto, cheguei depois à 
conclusão de que alguma formalidade seria não só necessária como útil, para criar um sentido de 
disciplina na elaboração do "código-fonte".    


A linguagem do VisuAlg permite apenas um comando por linha: desse modo, não há necessidade de 
tokens separadores de estruturas, como o ponto e vírgula em Pascal. Também não existe o conceito 
de blocos de comandos (que correspondem ao begin e end do Pascal e ao { e } do C), nem comandos 
de desvio incondicional como o goto. Na versão atual do VisuAlg, com exceção das rotinas de 
entrada e saída, não há nenhum subprograma embutido, tal como Inc(), Sqr(), Ord(), Chr(), Pos(), 
Copy() ou outro.    


Importante: para facilitar a digitação e evitar confusões, todas as palavras-chave do VisuAlg foram 
implementadas sem acentos, cedilha, etc. Portanto, o tipo de dados lógico é definido como logico, o 
comando se..então..senão é definido como se..entao..senao, e assim por diante. O VisuAlg também 
não distingue maiúsculas e minúsculas no reconhecimento de palavras-chave e nomes de variáveis.    



### Formato Básico do Pseudocódigo e Inclusão de Comentários    


O formato básico do nosso pseudocódigo é o seguinte:
algoritmo "semnome"
// Função :
// Autor :
// Data : 
// Seção de Declarações 
inicio
// Seção de Comandos 
fimalgoritmo
