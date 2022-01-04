## GoodCode

Com base no c�digo ruim na pasta Trashcode nesse exemplo n�s transformamos a interface
Imposto em uma classe abstrata.

Essa classe funciona de forma parecida com uma Linked List mas ela s� possui a refer�ncia 
da classe seguinte e n�o da anterior.

N�s temos um m�todo que ir� armazenar toda a l�gica de como ser� realizado o calculo 
(**realizaCalculoEspecifico**), uma m�todo para realizar o calculo do imposto (**calculaImposto**)
e este m�todo ir� chamar outro m�todo que realiza o calculo de refer�ncia seguinte ou retornar 
zero caso n�o tenha refer�ncia (**calculaProximoImposto**)

No momento em que formos chamar nossa calculadora de impostos basta criar nosso primeiro imposto 
e encadear uma s�rie de refer�ncia para os impostos seguintes.
