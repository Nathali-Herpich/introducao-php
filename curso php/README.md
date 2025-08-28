# 🐘 Regras para Identificadores de Variáveis em PHP

Este documento apresenta as regras básicas para definição de nomes de variáveis em PHP. Seguir essas diretrizes ajuda a evitar erros e melhora a legibilidade do código.

---

## ✅ Regras Básicas

1. **Todas as variáveis em PHP devem começar com o símbolo `$`**

   ```php
   $nome = "João";
   
2. O segundo caractere pode ser uma letra ou símbolo (ex: _)


````php
$_usuario = "admin";
$x1 = 10;
````
3. É permitido usar caracteres com acentuação (não recomendado):

````php
$ação = "vender";
$último_nome = "Silva";
````
PHP diferencia maiúsculas de minúsculas (case-sensitive):

````php
$nome = "Maria";
$Nome = "João";
````
- Essas duas variáveis são diferentes.


Nomes reservados pelo PHP, como $this, não podem ser usados:
---
````php

$this = "valor"; // ERRO

````
💡 Boas Práticas
---
Use nomes descritivos: 
````
$nomeCliente, $valorTotal.
````

- Evite acentos e caracteres especiais.

- Utilize camelCase para melhorar a legibilidade.

- Não sobrescreva variáveis do sistema ($this, $_POST, etc.).

📌 Exemplo Completo
---
````php
<?php
$nome = "Ana";
$Nome = "Carlos";
$_idade = 30;
$ação = "comprar"; // permitido, mas evite

echo $nome . " e " . $Nome;
?>
````
