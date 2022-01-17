## GoodCode

Essa abordagem flyweights tem suas vantangens e a principal 
delas é o a forma como podemos deixar a criação de objetos 
massa muito menos custoso para o computador.

Então ao invés de sempre criarmos um objeto para cada iteração 
do código, criamos um Template com algumas inforamações que podem
ser repetidas entre os pedidos, (**TemplatePedido**) e
agora ao invés de criamos novos dados para cada classe, criamos 
somente um Template que vai preencher várias classes.

Isso tem suas desvantagens, uma delas é e se tem tempo de execução 
quisermos mudar os dados do template? Não há forma de fazer sem isso
sem alterações muitos específicas no código, isso quebra o prícipio 
de aberto e fechado do SOLID
