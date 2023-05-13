# Validador CPF (Cadastro de Pessoa Física) - Brazil (Algorítmo para Validar CPF)

**Algorithm source code written in VisualG 2.0 - Iberia Portuguese**

O número de CPF para ser válido não basta apenas atender à máscara "###.###.###-##" (o caractere '#' representa um número), existe uma regra matemática que também deve ser verificada para um CPF ser considerado válido.

## REGRA PARA VALIDAR CPF
O cálculo para validar um CPF é especificado pelo Ministério da Fazenda do Brasil, que disponibiliza no próprio site as funções (em javascript) para validação do CPF, seguindo a seguinte regra lógica:

O CPF é formado por 11 dígitos numéricos que seguem a máscara "###.###.###-##", a verificação do CPF acontece utilizando os 9 primeiros dígitos e, com um cálculo simples, verificando se o resultado corresponde aos dois últimos dígitos (depois do sinal "-").

Vamos usar como exemplo, um CPF fictício "529.982.247-25".

### I Validação do primeiro dígito de controle

Multiplica-se os 9 primeiros dígitos pela sequência decrescente de números de 10 à 2 e os resultados são somados:

5 * 10 + 2 * 9 + 9 * 8 + 9 * 7 + 8 * 6 + 2 * 5 + 2 * 4 + 4 * 3 + 7 * 2

O resultado neste exemplo é: 295

### II Continuando a validação

Multiplicar o resultado do passo anterior por 10 e dividir por 11: 295 * 10 / 11

O relevante para o cálculo é o "RESTO" da divisão:
- Se ele for igual ao primeiro dígito verificador (primeiro dígito depois do '-'), a primeira parte da validação está correta. **
** Observação Importante: Se o resto da divisão for igual a 10, considera-se como 0.

No exemplo aqui utilizado:
- conferir o primeiro dígito verificador do exemplo: resultado da divisão acima é '268' e o "RESTO" é 2
- ou seja, de acordo com a regra lógica, o número fictício de CPF usado no exemplo passou na validação do primeiro dígito.

### III Validação do segundo dígito de controle

A validação do segundo dígito de controle é semelhante à primeira, porém deve-se considerar os 9 primeiros dígitos, mais o primeiro dígito verificador.
Em.seguidam multiplica-se esses 10 números pela seqüência decrescente de 11 a 2:

5 * 11 + 2 * 10 + 9 * 9 + 9 * 8 + 8 * 7 + 2 * 6 + 2 * 5 + 4 * 4 + 7 * 3 + 2 * 2

O resultado é: 374

Seguindo o mesmo processo da primeira verificação, multiplicar por 10 e dividir por 11: 347 * 10 / 11

- Verificar o "RESTO", como no passo anterior: o resultado da divisão é '315' e o "RESTO" é 5
- Verificar se o "RESTO" corresponde ao segundo dígito verificador.

Após esta verificação, conclui-se que o CPF 529.982.247-25 é válido.

### Números de CPF para testes (inválidos ou fictícios)

Existem números conhecidos de CPF fictícios que são validados quando testados, mas são considerados não válidos para uso oficial. Geralmente utilizados em exemplos ou em testes. É o caso, por exemplo, dos números de CPF com dígitos repetidos (111.111.111-11, 222.222.222-22, etc.)
O algoritmo aqui proposto, também verifica se todos os dígitos do CPF são iguais e, neste caso, considera o mesmo inválido.

## ALGORITMO PARA VALIDAR CPF

Com a introdução acima da lógica e das regras para validação dos números de CPF, encontramos a seguir um algoritmo para replicar asnregras e a lògica.
Aferramenta utilizada para construir o algoritmo ë o Visualg.

No algoritmo apresentado a seguir:

- a função validaCPF(cpf:CARACTER) é criada
- o resuldado retorna TRUE ou FALSE para o número de CPF sendo testado.
- para testar o algorítmo devalidação, três números de CPF são aplicados, um inválido, outro válido, e um com dígitos repetidos. 

O resultado da execução deste algoritmo é apresentado a seguir::
- CPF 123.456.789-12 é inválido!
- CPF 529.982.247-25 é válido!
- CPF 777.777.777-77 é inválido!

Foram também utilizadas funções pré-definidas pelo Visualg para extrair cada caracter da variável CPF e para convertê-los em números inteiros:
- Caracpnum (c : caracter): inteiro
para converter um valor do tipo texto em um valor do tipo inteiro

- Copia (c : caracter ; p, n : inteiro): caracter para extrair sub-textos de variáveis texto.
Recebe três parâmetros, o primeiro é o texto de onde vamos extrair o sub-texto, o segundo é a posição de inicio do sub-texto e o terceiro parâmetro é a quantidade de caracteres que vamos extrair.

No exemplo, os dígitos do cpf sāo extraídos através da função copia e o resultado convertido para inteiro através da função caracpnum.

Por exemplo, para o número de CPF "529.982.247-25" a linha abaixo atribui o valor inteiro 8 à variável num5, pois este é o caracter da posição 6 (contando o caracter ponto "."): 
num5 := Caracpnum( Copia(cpf, 6, 1) )

Outro detalhe interessante é o operador mod que retorna o resto da divisão.

Existem outras formas para implementar a lógica, por exemplo, com Vetores, LOOPs, etc. 

# Author: Gustavo Furtado de Oliveira Alves
