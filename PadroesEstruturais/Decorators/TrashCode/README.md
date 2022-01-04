## C�digo Ruim

Nesse exemplo n�s iremos utilizar como base uma calculadora de impostos 
que recebe dois par�metros um **orcamento** e **imposto** 

A ideia � que o imposto seja calculado em cima do valor original do orcamento

No sistema ent�o n�s teremos uma classe orcamento e outra imposto para que elas 
sejam informadas a nossa calculadora 

O problema dessa arquitetura � se precisarmos cobrar mais de uma imposto em cima 
de um �nico or�amento. 

Se pensarmos um poucos podemos criar uma classe que seja a soma do resultado de dois
impostos, mas isso faria com que a complexidade do projeto crescesse exponencialmente 
pois ser� necess�rio criar uma classe para cada combina��o de imposto. Tamb�m faz com 
que o aclopamento do projeto cres�a j� que sempre teremos criar classes que ser�o 
extremamente dependentes uma das outras