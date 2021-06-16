# Teste Full-Stack
# Leia primeiro todo o projeto
Quando finalizar o teste, **publique tudo no seu Github, BitBucket e envie por email para xxx@reweb.com.br** com o assunto [Teste Full-Stack PHP] Finalizado - <SEU NOME>
**Deverá ser criado o dockerfile para a montagem do ambiente**

# Missão backend
Desenvolver uma **API JSON RESTfull** em PHP, que utilize todos os métodos (GET, POST, PUT, DELETE).
Se preferir, utilize algum framework PHP que você sinta mais facilidade: Code Igniter, Laravel

# Especificação
Monte uma base de veículos com a seguinte estrutura:
id:		    integer
veiculo:   	string
marca:     	string
ano:       	integer
descricao: 	text
vendido:   	bool
created:   	datetime
updated:   	datetime
Utilize MySQL para armazenar os dados que a API irá consumir.

# API endpoints
**GET /veiculos**
Retorna todos os veículos

**GET /veiculos/find**
Retorna os veículos de acordo com o termo passado parâmetro q (URL: /veiculos/find?q="termo buscado")

**GET /veiculos/{:id}**
Retorna os detalhes do veículo

**POST /veiculos**
Adiciona um novo veículo

**PUT /veiculos/{:id}**
Atualiza os dados de um veículo

**DELETE /veiculos/{:id}**
Apaga o veículo

# Missão frontend
Desenvolver uma UI (User Interface) conforme especificação abaixo. O layout é livre. Mas lembre-se, ela deve ser responsiva.

# Especificação

Layout responsivo
**Consumir API** criada acima
Usar algum framework Javascript será um Bônus ⭐

**Criar uma tela que tenha:**
Listagem de veículos
Detalhe do veículo
Busca
Formulário de novo/edição de veículos


# Dica
Utilize algum framework para auxiliar no desenvolvimento da interface, por exemplo, Bootstrap.
