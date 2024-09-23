## Laravel Fortify Mastery - Parte 1

<p align="center">
    <a href="https://www.youtube.com/watch?v=8i1OUXaFyyA" target="_blank">
        <img src="public/cover2.png"  alt="Laravel Logo">
    </a>
</p>


## Configurazione della repository

Per iniziare, clona la repository del progetto ed entra nella cartella appena creata:

```bash
git clone git@github.com:FrancescoMansi/youtube-fortify-1.git

cd youtube-fortify-1
```

Successivamente, installa le dipendenze necessarie:

```bash
composer install
```

Configura l’ambiente di sviluppo:

```bash
cp .env.example .env

php artisan key:generate

```

Crea il database e lancia le migrazioni:

```bash
touch database/database.sqlite

php artisan migrate
```

Infine, lancia il server locale con:

```bash
php artisan serve
```
