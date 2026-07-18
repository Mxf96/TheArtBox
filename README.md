# The ArtBox
---
## Description du projet

**The ArtBox** est un site web de galerie d'art permettant d'afficher une collection d'œuvres et leurs informations détaillées.

L'objectif principal est de mettre en place un site dynamique en PHP en appliquant plusieurs notions :

- factorisation des éléments communs (header/footer) ;
- manipulation de tableaux PHP ;
- génération dynamique des pages ;
- utilisation des paramètres d'URL ;
- séparation des responsabilités du code.

---
## Fonctionnalités

Le site permet :
- d'afficher la liste des œuvres disponibles ;
- d'afficher une page de détail pour chaque œuvre ;
- de naviguer entre les différentes œuvres grâce à leur identifiant ;
- de centraliser les données des œuvres dans un tableau PHP ;
---
## Technologies utilisées

### Front-end

- HTML5
- CSS3
### Back-end

- PHP 8+
### Outils

- WampServer
- Git / GitHub
- Visual Studio Code

---
## Installation du projet

### Prérequis

Installer :

- PHP 8 ou supérieur
- WampServer ou un serveur PHP local
- Git

---
### Cloner le projet

Depuis un terminal :

```bash
git clone https://github.com/Mxf96/TheArtBox.git
```

Se placer dans le dossier :

```bash
cd TheArtBox
```

---
## Configuration locale

Placer le projet dans le dossier serveur local :

Exemple avec WampServer :

```
C:\wamp64\www\TheArtBox
```

Puis accéder au projet :

```
http://theartbox.local
```

ou :

```
http://localhost/TheArtBox
```

---
## Structure du projet

```
TheArtBox/
│
├── css/
│   └── style.css
│
├── img/
│   └── images des œuvres
│
├── includes/
│   ├── header.php
│   └── footer.php
│
├── oeuvres.php
├── index.php
├── oeuvre.php
│
└── README.md
```

---
## Fonctionnement dynamique

Les œuvres sont centralisées dans le fichier :

```
oeuvres.php
```

Chaque œuvre est représentée par un tableau associatif :

```php
[
    'id' => 1,
    'titre' => 'Dodomu',
    'artiste' => 'Mia Tozerski',
    'image' => 'img/clark-van-der-beken.png',
    'description' => 'Description de l’œuvre'
]
```

La page d'accueil utilise une boucle `foreach` afin d'afficher automatiquement toutes les œuvres.

La page détail utilise l'identifiant transmis dans l'URL :

Exemple :

```
oeuvre.php?id=1
```

Le script recherche l'œuvre correspondante dans le tableau PHP puis affiche ses informations.