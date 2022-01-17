## GoodCode

Nesse código nós podemos notar algumas vantangens, e uma das 
mais importantes, é que removemos depedências de nosso código,
no sentido de que em nosso script criar, nós agora só temos 
uma fabrica que irá criar nossos pedidos e isso é um fato 
importante, já que não precisamos estânciar a classe Pedido,
nem TemplatePedido.

Segundo ponto interessante de se observar é que nossa fabrica
possui um cache que é uma tabela de espalhamento, ela salva 
os templates e caso os templates sejam inguais a invés de criar
um novo ela pega um que ela já criou.

E agora em nosso script podemos inserir um nome, data e até um orçamento 
gerador aletoriamente pelo usuário.