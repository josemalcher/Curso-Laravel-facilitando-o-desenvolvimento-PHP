# Curso Laravel facilitando o desenvolvimento PHP - Alura

O projeto será de controle de estoque. Como usuário final, seremos capazes de gerenciar os produtos que
serão persistidos em um banco de dados MySQL, visualizar com facilidade os que estão em falta no estoque, e mais.
O contexto é simples, mas será uma boa base para explorar os poderosos recursos e facilidades que o Laravel
oferece.

---

## <a name="indice">Índice</a>

- [1. Novo projeto com Laravel](#parte1)   
- [2. MVC e conexão com banco de dados](#parte2)   
- [3. Trabalhando com a View](#parte3)   
- [4. Parâmetros da request e URL](#parte4)   
- [5. Views mais flexíveis e poderosas](#parte5)   
- [6. Request e métodos HTTP](#parte6)   
- [7. Os diferentes tipos de resposta](#parte7)   


---

## <a name="parte1">1. Novo projeto com Laravel</a>

#### instalação

https://laravel.com/docs/5.0/installation

```
composer global require "laravel/installer=~1.1"

composer global require "laravel/installer"

```

#### estrutura de pastas

- app: nela ficam seus modelos, views e controllers, que serão bem detalhados no próxima aula. Em poucas
palavras, é onde boa parte do seu código vai ficar. Ela possui uma série de subdiretórios, como Commands ,
Console , Http , Events , entre outros. Não se preocupe em entender o significado de cada um deles agora,
vamos vê-los melhor conforme formos precisando.
- config: como o nome já indica, é onde ficam os arquivos de configuração do seu projeto. Se você precisar
alterar as configurações de cache, e-mail, banco de dados, entre outras, já sabe onde encontrar.
- public: é a pasta pra onde seu web server vai apontar. Lá fica o arquivo index.php , que aponta para sua
aplicação. Além disso, é comum colocarmos os arquivos css , imagens , javascript e todos os demais
arquivos públicos nesse diretório.
- vendor: é onde fica o source code do Laravel, plugins e outras dependências. Tudo que você usar de terceiros
(bibliotecas, frameworks etc.) deve ficar nela.

```
    laravel new estoque
```

```
    cd estoque
    php artisan serve
```

O ::namespace:: padrão de toda aplicação com Laravel é App , mas é muito comum e bastante recomendado que você altere o namespace para o nome da sua aplicação.

```
php artisan app:name estoque
```

- \estoque\routes\web.php
- 
```php
Route::get('/', function () {
    return 'Primeira lógica com Laravel';
});
```

```
Route::get('/', function () {
    return '<h1>Primeira lógica com Laravel</h1';
});

Route::get('/outra', function(){
    return '<h1>Outra lógica com Laravel</h1';
});
```


[Voltar ao Índice](#indice)

---

## <a name="parte2">2. MVC e conexão com banco de dados</a>


[Voltar ao Índice](#indice)

---

## <a name="parte3">3. Trabalhando com a View</a>


[Voltar ao Índice](#indice)

---

## <a name="parte4">4. Parâmetros da request e URL</a>


[Voltar ao Índice](#indice)

---

## <a name="parte5">5. Views mais flexíveis e poderosas</a>


[Voltar ao Índice](#indice)

---

## <a name="parte6">6. Request e métodos HTTP</a>


[Voltar ao Índice](#indice)

---

## <a name="parte7">7. Os diferentes tipos de resposta</a>


[Voltar ao Índice](#indice)

---