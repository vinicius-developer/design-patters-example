## GoodCode

Nesse c�digo n�s podemos notar algumas vantangens, e uma das 
mais importantes, � que removemos deped�ncias de nosso c�digo,
no sentido de que em nosso script criar, n�s agora s� temos 
uma fabrica que ir� criar nossos pedidos e isso � um fato 
importante, j� que n�o precisamos est�nciar a classe Pedido,
nem TemplatePedido.

Segundo ponto interessante de se observar � que nossa fabrica
possui um cache que � uma tabela de espalhamento, ela salva 
os templates e caso os templates sejam inguais a inv�s de criar
um novo ela pega um que ela j� criou.

E agora em nosso script podemos inserir um nome, data e at� um or�amento 
gerador aletoriamente pelo usu�rio.