# Authentification MVC : mettre en place le login

## Étape 0 :

Pour commencer cette fonctionnalité vous devez d'abord avoir trouvé une base de données correspondant aux critères (au moins un email et un mot de passe chiffré).

Vous devez également avoir mis en place un routeur qui appelle les méthodes de vos Controllers, même si celles-ci sont vides.


## Étape 1 : le modèle User

Allez vérifier les champs de la table `users` de votre base de données puis créez une classe `User` qui correspondra à cette table.


## Étape 2 : le template

Dans les consignes parmis les routes concernant la connexion, seule `index.php?route=connexion` affiche quelque chose, puisque `index.php?route=check-connexion` se solde par une redirection.

Vous allez donc créer un template qui vous permettre d'afficher un formulaire de connexion, dont l'action sera `index.php?route=check-connexion`.


## Étape 3 : AuthController la route connexion

Dans la méthode correspondant à la route `index.php?route=connexion` vous n'avez qu'une chose à faire : préparer le template que le layout devra ensuite appeler.


## Étape 4 : le UserManager

Une fois que vous avez suivi les consignes d'origine et que vous avez créé un AbstractManager qui initilise une connexion à la base de données et le UserManager vide qui hérite d'AbstractManager, vous allez devoir y ajouter votre première méthode :

- cette méthode doit vous permettre de récupérer un utlisateur par le biais de son email et de le renvoyer dans une instance de la classe User s'il existe ou de renvoyer null s'il n'existe pas.


## Étape 5 : AuthController : la route check connexion

Dans la méthode correspondant à la route `index.php?route=check-connexion` vous allez devoir faire ce que fait habituellement la connexion :

1. récupérer les champs du formulaire dans `$_POST`
2. vérifier si l'utilisateur existe dans la base de données grâce à son email
3. vérifier si le mot de passe soumis correspond à la base de données
4. si tout est bon, stocker dans `$_SESSION` le fait que votre utilisateur soit connecté
5. rediriger vers la bonne route

Ici, vous allez donc avoir besoin d'instancier un `UserManager`pour répondre au point 2.


## Étape 6 : ne pas oublier la session

Puisque votre méthode de controller utilise les sessions n'oubliez pas de faire un `session_start` dans votre index.php.


