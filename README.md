# Sakura Matsuri

Tema customizado Wordpress específico para o evento.

---

## 🚀 Como rodar localmente

### Servidor

É necessário algum servidor rodando local, recomendo utilizar o **XAMPP** que contem o Apache.

### Banco de dados

É necessário ter um banco de dados MySQL rodando localmente.

> O XAMPP já possui o **phpMyAdmin** instalado por padrão.

Depois, crie uma cópia do arquivo `wp-config-sample.php` com o nome de `wp-config.php`, substituindo o nome do banco, usuário e senha.

> O XAMPP possui como usuário padrão `root` e senha vazia.

### Wordpress

É necessário baixar uma versão do **Wordpress** para depois adicionar os arquivos deste repositório dentro da pasta `/wp-content/themes`

No painel, nas configurações de **Leitura** é preciso colocar que a página inicial exiba uma página estática, e criar uma página com o nome **Home**, além disso nos **Links Permanentes** é preciso configurar a estrutura dos links como o nome do post.

---

## 📂 Estrutura

A ideia da estrutura de pastas é conter um arquivo php e um css para cada página, e o nome da pasta contendo esses dois arquivos precisa ser o slug de uma página criada no painel do Wordpress.

```md
sakura-theme/
│
├── style.css
├── functions.php
├── index.php
├── header.php
├── footer.php
├── page.php
│
├── pages/
│   └── {pageSlug}
│       ├── index.php
│       └── style.css
│
└── screenshot.png
```