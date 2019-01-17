**Installation du projet**

Installer les dépendances du projet :

```composer install```

Lancer les commandes suivantes : 

```bin/console doctrine:database:create```

```bin/console doctrine:migrations:migrate```

```bin/console doctrine:fixtures:load```

Générer les clés SSH

```mkdir -p config/jwt```

```openssl genrsa -out config/jwt/private.pem -aes256 4096```

```openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem```

Saisissez votre passphrase dans le fichier ```.env```

**Effectuez une requête pour se connecter :**

```curl -X POST -H "Content-Type: application/json" http://localhost:8000/api/login_check -d '{"username":"sfr", "password": "pass"}'```

Vous devriez avoir ceci qui s'affiche dans votre console : 

```
{
   "token" : "yourtoken"
}
```

À vous de jouer
