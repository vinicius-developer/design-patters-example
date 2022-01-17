## TrashCode 

Nesse caso aqui em nossa classe LoggerManager temos um if 
dizendo qual das implemntação do LogWritter iremos escolher
e isso é horrível pois quebra com o príncipio de aberto
fechado do SOLID já precisaremo alterar a classe LogManager
toda vez que fomos alterar um log.

Nesse caso outra alterantiva é utiliza a injeção de dependência
mais isso iria aumentar a dependência em nosso arquivo de 
script
