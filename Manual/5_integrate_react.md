# Integrate React.js

```
composer require laravel/ui
```

![2022-04-18 09_12_51-Window](https://user-images.githubusercontent.com/55657279/163743833-577bc4c4-65cb-4042-8385-151ba15899e2.png)

```
npm install
```

![2022-04-18 21_36_29-Window](https://user-images.githubusercontent.com/55657279/163823982-4ad16e64-a56d-4a82-a54b-38506000d656.png)

```
php artisan ui react
npm install
npm install --save-dev laravel-mix@latest
npm install
```

Remove `--hide-modules` from the following line in `package.json`

![2022-04-18 23_00_13-Window](https://user-images.githubusercontent.com/55657279/163836369-a4b72053-f713-4e05-9e60-6731c3c8bfb9.png)

```
npm run dev 
```

![2022-04-18 23_02_19-Window](https://user-images.githubusercontent.com/55657279/163836556-67f02183-c026-4b65-9366-d221d9f34974.png)

```
php artisan ui:auth
```
 
![2022-04-18 23_06_21-Window](https://user-images.githubusercontent.com/55657279/163837037-7d90106e-37cf-4b43-b126-d89434282b08.png)

```
composer require barryvdh/laravel-debugbar
```

![2022-04-18 23_11_30-Laravel](https://user-images.githubusercontent.com/55657279/163837699-5731fd6f-70e2-436c-9c85-f35a4f2981c7.png)


Initialise tables in MySQL DB by running
```
php artisan migrate
```
Note that the default DB name is `laravel`, this can be changed in `.env` file

Pre-load employee DB
```
php artisan make:model Employee -mfs
```

Add table fields and run the following command to create a table
```
php artisan migrate
```
