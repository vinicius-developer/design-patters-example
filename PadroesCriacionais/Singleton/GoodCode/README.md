## Good Code 

Nessa caso quando nós tornamos o construtor privado, não podemos 
criar novas intâncias de uma classe, e para lidar com isso nós 
criamos um método estatico que cria um instância pra gente.

Essa classe tembém possui um atributo que serve de "cache" isso 
quer dizer que enquanto já tiver um instância salva no atributos
outras intâncias não serão criadas, e quando não tivermos iremos 
criar outras intâncias.