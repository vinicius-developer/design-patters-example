## GoodCode

Com esse padr�o de projeto criamos uma interface prototype
que implementa o m�todo clone, esse m�todo � utilizado 
para criar e devolver um c�pia para quem chama o m�todo
clone.

Esse m�todo faz com que se tone poss�vel criar objetos 
similares sem precisar copiar todo o trecho de cria��o novamente 

Outro fato imporntante � que copiando voc� acaba utilizando a 
ref�ncia dos atributos em outro objeto e isso pode causar algum 
problema. Para tratar esse problema talvez seja necess�rio fazer
moficica��o em nosso m�todo clone.

O php j� oferece a palavra reservada clone para clonar um objeto
caso voc� necessite fazer altera��o no objeto pode utilizar o m�todo
m�gico __clone