This brief example was developed for the purpose of the FCA Tech Sprint 2017

## How to use
1. Clone repository
2. Run `composer install` to install dependencies
3. Run `php artisan key:generate` from the root of this repository

If you are running this from an apache server your root should be either the `/public` folder
or you will need to modify your .htaccess file. For example if you are using the mod_userdir
for apache then something like this will be more appropriate

```
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews
    </IfModule>

    Options +FollowSymlinks
    Options -Indexes

    RewriteEngine On
    RewriteBase /~george/fca-sprint-2017/public/

    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule .* index.php [L]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)/$ /$1 [L,R=301]

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
</IfModule>
```

To run dynamic compiling of sass and javascript then you need to run

1. `npm install`
2. `npm run watch`

which will recompile the javascript and css assets on the fly.f