## GoodCode

Com base no código ruim na pasta Trashcode nesse exemplo nós transformamos a interface
Imposto em uma classe abstrata.

Essa classe funciona de forma parecida com uma Linked List mas ela só possui a referência 
da classe seguinte e não da anterior.

Nós temos um método que irá armazenar toda a lógica de como será realizado o calculo 
(**realizaCalculoEspecifico**), uma método para realizar o calculo do imposto (**calculaImposto**)
e este método irá chamar outro método que realiza o calculo de referência seguinte ou retornar 
zero caso não tenha referência (**calculaProximoImposto**)

No momento em que formos chamar nossa calculadora de impostos basta criar nosso primeiro imposto 
e encadear uma série de referência para os impostos seguintes.
