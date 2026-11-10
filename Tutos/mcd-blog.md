
# MCD complet — Blog

## 1. Entités et attributs

### VILLE
- **id_ville** (Identifiant)
- nom_ville

### AUTEUR
- **id_auteur** (Identifiant)
- nom_auteur
- prenom_auteur
- email_auteur

### ARTICLE
- **id_article** (Identifiant)
- titre_article
- contenu_article
- date_publication
- statut_article
- image_article

### CATEGORIE
- **id_categorie** (Identifiant)
- nom_categorie

## 2. Relations et cardinalités

- VILLE (0,N) — habite — (1,1) AUTEUR
- AUTEUR (0,N) — rédige — (1,1) ARTICLE
- CATEGORIE (0,N) — regroupe — (1,1) ARTICLE

## 3. Remarque

- duree_lecture est une donnée calculée, elle n'est pas incluse dans le MCD.
