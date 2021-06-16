# Teste Full-Stack
# Leia primeiro todo o projeto
Quando finalizar o teste, **publique tudo no seu Github, BitBucket e envie por email para ctrindade@reweb.com.br, roberto@reweb.com.br** com o assunto [Teste Full-Stack PHP] Finalizado - < SEU NOME >
<br>Deverá ser criado o dockerfile para a montagem do ambiente**

# Missão backend
Desenvolver uma **API JSON RESTfull** em PHP, que utilize todos os métodos (GET, POST, PUT, DELETE).
<br>Se preferir, utilize algum framework PHP que você sinta mais facilidade: Code Igniter, Laravel

# Especificação
<br>**Monte uma base de veículos com a seguinte estrutura:**
<br>id:		    integer
<br>veiculo:   	string
<br>marca:     	string
<br>ano:       	integer
<br>descricao: 	text
<br>vendido:   	bool
<br>created:   	datetime
<br>updated:   	datetime
<br>Utilize MySQL para armazenar os dados que a API irá consumir.

# API endpoints
**GET /veiculos**
<br>Retorna todos os veículos
<br>
<br>**GET /veiculos/find**
<br>Retorna os veículos de acordo com o termo passado parâmetro q (URL: /veiculos/find?q="termo buscado")
<br>
<br>**GET /veiculos/{:id}**
<br>Retorna os detalhes do veículo
<br>
<br>**POST /veiculos**
<br>Adiciona um novo veículo
<br>
<br>**PUT /veiculos/{:id}**
<br>Atualiza os dados de um veículo
<br>
<br>**DELETE /veiculos/{:id}**
<br>Apaga o veículo
<br>
# Missão frontend
Desenvolver uma UI (User Interface) conforme especificação abaixo. O layout é livre. Mas lembre-se, ela deve ser responsiva.

# Especificação

<br>Layout responsivo
**Consumir API** criada acima
<br>Usar algum framework Javascript será um Bônus ⭐

**Criar uma tela que tenha:**
<br>Listagem de veículos
<br>Detalhe do veículo
<br>Busca
<br>Formulário de novo/edição de veículos


# Dica
Utilize algum framework para auxiliar no desenvolvimento da interface, por exemplo, Bootstrap.
