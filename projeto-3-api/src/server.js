import express from "express";
import { categorias } from "./categorias.js";

const app = express();
const PORT = 3000;

app.get("/api/categorias", (req, res) => {
  res.json(categorias);
});

app.get("/api/categorias/:id", (req, res) => {
  const id = Number(req.params.id);
  const categoria = categorias.find((item) => item.id === id);

  if (!categoria) {
    return res.status(404).json({
      error: "Categoria não encontrada"
    });
  }

  res.json(categoria);
});

app.listen(PORT, () => {
  console.log(`API executando na porta ${PORT}`);
});
