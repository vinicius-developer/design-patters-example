## Código Ruim

Nesse exemplo nós iremos utilizar como base uma calculadora de impostos 
que recebe dois parâmetros um **orcamento** e **imposto** 

A ideia é que o imposto seja calculado em cima do valor original do orcamento

No sistema então nós teremos uma classe orcamento e outra imposto para que elas 
sejam informadas a nossa calculadora 

O problema dessa arquitetura é se precisarmos cobrar mais de uma imposto em cima 
de um único orçamento. 

Se pensarmos um poucos podemos criar uma classe que seja a soma do resultado de dois
impostos, mas isso faria com que a complexidade do projeto crescesse exponencialmente 
pois será necessário criar uma classe para cada combinação de imposto. Também faz com 
que o aclopamento do projeto cresça já que sempre teremos criar classes que serão 
extremamente dependentes uma das outras