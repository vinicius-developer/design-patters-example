## Good Code 

Nessa caso quando n�s tornamos o construtor privado, n�o podemos 
criar novas int�ncias de uma classe, e para lidar com isso n�s 
criamos um m�todo estatico que cria um inst�ncia pra gente.

Essa classe temb�m possui um atributo que serve de "cache" isso 
quer dizer que enquanto j� tiver um inst�ncia salva no atributos
outras int�ncias n�o ser�o criadas, e quando n�o tivermos iremos 
criar outras int�ncias.