## TrashCode 

Nesse caso aqui em nossa classe LoggerManager temos um if 
dizendo qual das implemnta��o do LogWritter iremos escolher
e isso � horr�vel pois quebra com o pr�ncipio de aberto
fechado do SOLID j� precisaremo alterar a classe LogManager
toda vez que fomos alterar um log.

Nesse caso outra alterantiva � utiliza a inje��o de depend�ncia
mais isso iria aumentar a depend�ncia em nosso arquivo de 
script
