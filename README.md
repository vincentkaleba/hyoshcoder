## Documentation de l’interface et du flux d’authentification

### Overview

Cette documentation résume l’interface présentée dans la vidéo ainsi que les principales parties du projet : page d’accueil, formulaire de contact, messages de retour, et routes d’authentification. Elle met aussi en évidence l’organisation générale du code avec les composants, les modèles, les contrôleurs et les routes protégées.

 

**Présentation de l’interface** [0:25](https://loom.com/share/a8c092dad6af4163b902957c2206c43d?t=25)

![generated-image-at-00:00:25](https://loom.com/i/fc8aeb83cf5d4750a4febeadef65b2f4?workflows_screenshot=true)

- L’interface regroupe plusieurs sections visibles dès l’accueil.
- On y retrouve notamment :
  - une section de présentation,
  - une section sur l’expérience,
  - une section sur les langages et technologies,
  - une section contact,
  - une section projet.
- La structure semble pensée pour présenter le contenu de manière claire et directe.

 

**Formulaire de contact et envoi du message** [1:45](https://loom.com/share/a8c092dad6af4163b902957c2206c43d?t=105)

![generated-image-at-00:01:45](https://loom.com/i/8f808622f62a425aad3c9aa9b7900a9f?workflows_screenshot=true)

- Le projet inclut un formulaire de contact.
- Les champs attendus sont :
  - `name`
  - `email`
  - `subject`
  - `message`
- Après soumission, un message de confirmation s’affiche pour indiquer que le message a été envoyé avec succès.

 

**Affichage du message de succès** [2:38](https://loom.com/share/a8c092dad6af4163b902957c2206c43d?t=158)

![generated-image-at-00:02:38](https://loom.com/i/3b6775abb84f43288efae23d438bba35?workflows_screenshot=true)

- Une zone dédiée permet de voir le retour après l’envoi du formulaire.
- Le message de succès confirme que l’action a bien été prise en compte.
- Cette partie améliore le retour utilisateur après soumission.

 

**Modèles et structure des données** [3:39](https://loom.com/share/a8c092dad6af4163b902957c2206c43d?t=219)

![generated-image-at-00:03:39](https://loom.com/i/0e177449ca214ccc9fe2538140d8997b?workflows_screenshot=true)

- Le projet utilise des modèles pour organiser les données.
- Un modèle de contact est mentionné pour gérer les informations du formulaire.
- La structure semble centrée sur la validation et la persistance des données envoyées.

 

**Contrôleurs et validation** [4:27](https://loom.com/share/a8c092dad6af4163b902957c2206c43d?t=267)

![generated-image-at-00:04:27](https://loom.com/i/46984848f75b4b6b80f9f76e9df77392?workflows_screenshot=true)

- Les contrôleurs gèrent la logique liée à la connexion et au traitement des données.
- Ils prennent aussi en charge la validation du formulaire.
- Cette séparation permet de distinguer clairement la logique métier de l’interface.

 

**Routes d’authentification** [5:39](https://loom.com/share/a8c092dad6af4163b902957c2206c43d?t=339)

![generated-image-at-00:05:39](https://loom.com/i/fe42ba19fa9b4d7e800c17215cc59501?workflows_screenshot=true)

- Le projet expose des routes dédiées à l’authentification :
  - `login` pour la connexion,
  - `logout` pour la déconnexion.
- Ces routes servent à gérer l’accès à certaines parties de l’application.

 

**Routes protégées et accès administrateur** [6:04](https://loom.com/share/a8c092dad6af4163b902957c2206c43d?t=364)

![generated-image-at-00:06:04](https://loom.com/i/56590d72fbe447f6beef98a6865c3057?workflows_screenshot=true)

- Certaines routes sont protégées par un middleware.
- Ce mécanisme limite l’accès aux utilisateurs autorisés.
- Un lien vers l’administration est également présent dans l’application.

<https://loom.com/share/a8c092dad6af4163b902957c2206c43d>

- Demo du projet : [https://hyoshcode.koyeb.app/](https://hyoshcode.koyeb.app/)
- Admin : [https://hyoshcode.koyeb.app/login](https://hyoshcode.koyeb.app/login)
