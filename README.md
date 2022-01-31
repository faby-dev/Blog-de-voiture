# Prérequis
1. PHP 8
2. Composer
3. node (npm ou yarn)
# installation
1. clone la projet  taper la commande suivants :
    ```bash
    $ git clone https://github.com/faby-dev/SymReact.git
    ```

2. Avoire tout le bundle :
    ```bash
    $ composer install
    ```

3. Avoire touts les package js :
    ```bash
    $ npm install ou yarn install
    ```
4. Configure la base de donnée modifier la ligne suivante:
    ```bash
    DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
    ```
5. Créez la base de donnée tape cette ligne de commande:
    ```bash
    $ php bin/console d:d:c
    ```
6. Avoire tout les tables tape cetteligne de commande:
    ```bash
    $ php bin/console d:s:u -f
    ```
7. Lanche la Server php : 
    ```bash
    $ php -S localhost:3000 -t public
    ```
8. Compiler la Tout le fiche js et css : 
    ```bash
    $ yarn encore dev --watch
    ```
9. Test les api:
    ## Remarque:
    - Pour test les api il faut utiliser un logiciel de testeur d'api comme postman ou insomia sns..
    - Pour l'api Commentaire c'est securiser veuillez recevoir le token sur le route /api/login

    ## api Voitures
        -   List des Voitures : /api/listvoitures (Verbs http: GET)
        -   Recevoirs un Voitures en particulier: /api/voiture/{id} (Verbs http: GET) Remplace id par identifiants de la voitures
        -   Ajouter un Voitures: /api/ajoutvoiture (Verbs http: POST) envoier des données en JSON
        -   Modifier un Voitures en paritculier: /api/modification_voitures/{id} (Verbs http: PUT) envoier des données en JSON, Remplace id par identifiants de la voitures
        -   Supprimer un voitures ne particulier: /api/supprimer_voitures/{id} (Verbs http: DELETE)
    
    ## api Commentaires
        -   List des Commentaires : /api/commentaires (Verbs http: GET)
        -   Recevoirs un Commentaires en particulier: /api/commentaire/{id} (Verbs http: GET) Remplace id par identifiants de la voitures
        -   Ajouter un Commentaires: /api/ajout-commentaire (Verbs http: POST) envoier des données en JSON
        -   Modifier un Commentaires en paritculier: /api/commentaire-modifier/{id} (Verbs http: PUT) envoier des données en JSON, Remplace id par identifiants de la voitures
        -   Supprimer un Commentaires ne particulier: /api/commentaire-supprimer/{id} (Verbs http: DELETE) 

    ## api login
        - login : /api/login (Verbs http: POST) Veuillez renseigner votre username et mot de passe en JSON

10 - La partier front end fait avec reactJS(Voire dans la fiche asset pour la code)
