## TrashCode 

O método proxy consiste em uma classe que extende e recebe um objeto 
então ela possui os mesmos método da classe original, mas também recebe
um objeto da classe original.

Isso possibilita que os métodos sejam reescritos mas utilizando um objeto 
normal facilitando, fazendo com que possamos executar ações entes ou depois 
do processamento.

No caso de código ruim aqui nós criamos uma classe chamada PermissionApi que 
simula um request para api que pode demorar alguns segundos.