## GoodCode

Com esse padrão de projeto criamos uma interface prototype
que implementa o método clone, esse método é utilizado 
para criar e devolver um cópia para quem chama o método
clone.

Esse método faz com que se tone possível criar objetos 
similares sem precisar copiar todo o trecho de criação novamente 

Outro fato imporntante é que copiando você acaba utilizando a 
refência dos atributos em outro objeto e isso pode causar algum 
problema. Para tratar esse problema talvez seja necessário fazer
moficicação em nosso método clone.

O php já oferece a palavra reservada clone para clonar um objeto
caso você necessite fazer alteração no objeto pode utilizar o método
mágico __clone