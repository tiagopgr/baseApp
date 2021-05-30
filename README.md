# Dashboard

## PHP
    Laravel 8
    ** andersao/ l5-repository
    ** spatie/laravel-permission
    ** kristijanhusak/laravel-form-builder
    ** ycs77/laravel-form-builder-bs4
    
## Frontend e Javascript
    CoreUi
    * coreui/coreui-free-bootstrap-admin-template


### Instruções após o clone do repositório
    
* Instalar pacotes do composer.
```shell
composer install
```

* Criar o arquivo .env pelo .env.example
```shell
cp .env.example .env
```

* Gerar a chave de criptografia exigida pelo laravel
```shell
php artisan key:generate
```

* As dependencias javascript estão todas dentro da pasta public 
  já configuradas como default mas caso queira fazer mudanças, primeiro 
  instale as dependencias para o webpack

```shell
npm install
```

* Após as mudanças realizadas nos assets usar o comando
```shell
# Para ambiente de desenvolvimento
npm run dev 
```
```shell
# Antes de publicar o projeto rodar o comando para mimificar tudo css e javascripts
npm run prod 
```

