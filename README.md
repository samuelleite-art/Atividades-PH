# Atividade 01 — Categorias e Produtos

Projeto baseado nas instruções fornecidas na atividade.

## Estrutura

- `projeto-2-laravel/` — Projeto MVC/Laravel
- `projeto-3-api/` — API para categorias e produtos
- `docker-compose.yml` — serviços para execução

## Projeto 2 — Laravel/MVC

Rotas previstas:
- `GET /categorias`
- `GET /categorias/{id}`

O controller utiliza:
- `Categoria::orderBy('id')->get()`
- `Categoria::findOrFail($id)`
- `Produto::where('categoria', $categoria->nome)->get()`

Para subir o serviço:

```bash
docker compose up --build mvc
```

Acesse:

`http://localhost:8092/categorias`

## Projeto 3 — API

Endpoints:

```text
GET /api/categorias
GET /api/categorias/:id
```

Para subir:

```bash
docker compose up --build api
```

Testes:

```bash
curl http://localhost:8093/api/categorias
curl http://localhost:8093/api/categorias/1
curl -i http://localhost:8093/api/categorias/999
```

Para subir tudo:

```bash
docker compose up --build
```

Para parar:

```bash
docker compose down
```

> Observação: o PDF fornecido contém as instruções dos Projetos 2 e 3, mas não apresenta a especificação completa do Projeto 1. Por isso, este repositório não inventa requisitos para essa parte.
