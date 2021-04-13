# Coding Dojo PHP

Esse repositório foi criado para servir de modelo na criação de outros repositórios para quem quiser organizar eventos desse tipo.

## Iniciando

### Pré-requisitos:

- Docker

### PASSO 1: clone o repositório

### PASSO 2: instale a build do docker

```shell
docker-compose up -d
```

Com isso, o ambiente já instará instalado. Para testar, rode o comando abaixo:

```shell
docker-exec -it dojo-php bash
```

Você deverá entrar no bash do container. Caso algo dê errado, verifique os logs do Docker para ver se não houve erros durante a instalação.

## Sobre a estrutura

O repositório está centralizado em duas pastas:

- src: a pasta onde ficará o código-fonte de cada desafio;
- tests: a pasta onde ficarão os testes que devem cobrir cada desafio.

Isso significa que para toda e qualquer edição de Coding Dojo, é necessário criar uma pasta sobre ela tanto em src/ quanto em tests/.

Para deixar mais claro, criamos a edição "Example" que irá se encontrar nas duas pastas.

## Executando testes

Para verificar se sua solução resolveu o desafio, você deve rodar os testes preparados para ele.

Para isso, copie o nome da classe que deseja testar e execute o comando abaixo:

```shell
docker exec -it dojo-php php ./vendor/bin/phpunit --filter={NOME_DA_CLASSE}
```

Você também pode filtrar pelo nome do método no lugar da classe.
