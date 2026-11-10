# Déterminer les relations et les cardinalités

## 1. Les relations

| Entité 1 | Relation | Cardinalité | Entité 2 | Cardinalité |
|---|---|---|---|---|
| VILLE | héberge | (1,N) | AUTEUR | (1,1) |
| AUTEUR | rédige | (1,N) | ARTICLE | (1,1) |
| CATEGORIE | regroupe | (1,N) | ARTICLE | (1,N) |
| ARTICLE | possède | (1,N) | TAG | (1,N) |

## 2. Signification des cardinalités

- (0,1) : zéro ou un.
- (1,1) : exactement un.
- (0,N) : zéro ou plusieurs.
- (1,N) : un ou plusieurs.

## 3. Méthode pour déterminer une cardinalité

1. La participation est-elle obligatoire ?
   - Non : minimum = 0.
   - Oui : minimum = 1.

2. Peut-il y en avoir plusieurs ?
   - Non : maximum = 1.
   - Oui : maximum = N.

## 4. Exemples

- Un auteur peut rédiger plusieurs articles.
- Un article est rédigé par un seul auteur.
- Une catégorie peut regrouper plusieurs articles.
- Un article peut appartenir à plusieurs catégories.
- Un article peut posséder plusieurs tags.
- Un tag peut être associé à plusieurs articles.
