## GoodCode

Essa abordagem flyweights tem suas vantangens e a principal 
delas � o a forma como podemos deixar a cria��o de objetos 
massa muito menos custoso para o computador.

Ent�o ao inv�s de sempre criarmos um objeto para cada itera��o 
do c�digo, criamos um Template com algumas inforama��es que podem
ser repetidas entre os pedidos, (**TemplatePedido**) e
agora ao inv�s de criamos novos dados para cada classe, criamos 
somente um Template que vai preencher v�rias classes.

Isso tem suas desvantagens, uma delas � e se tem tempo de execu��o 
quisermos mudar os dados do template? N�o h� forma de fazer sem isso
sem altera��es muitos espec�ficas no c�digo, isso quebra o pr�cipio 
de aberto e fechado do SOLID
