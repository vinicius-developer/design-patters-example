## TrashCode 

O m�todo proxy consiste em uma classe que extende e recebe um objeto 
ent�o ela possui os mesmos m�todo da classe original, mas tamb�m recebe
um objeto da classe original.

Isso possibilita que os m�todos sejam reescritos mas utilizando um objeto 
normal facilitando, fazendo com que possamos executar a��es entes ou depois 
do processamento.

No caso de c�digo ruim aqui n�s criamos uma classe chamada PermissionApi que 
simula um request para api que pode demorar alguns segundos.