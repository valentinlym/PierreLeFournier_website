INSERT INTO `utilisateur` (`email`, `roles`, `mot_de_passe`)
VALUES ('admin@exemple.com', '[\"ROLE_ADMIN\"]', '$2y$13$4vD.GXSe8mPw/AGT1MkCDeFuFIyo4w7yrxDOYyMwa/OqUerNrxyWi');
INSERT INTO `utilisateur` (`email`, `roles`, `mot_de_passe`)
VALUES ('user1@exemple.com', '[\"ROLE_USER\"]', '$2y$13$4vD.GXSe8mPw/AGT1MkCDeFuFIyo4w7yrxDOYyMwa/OqUerNrxyWi');
INSERT INTO `utilisateur` (`email`, `roles`, `mot_de_passe`)
VALUES ('user2@exemple.com', '[\"ROLE_USER\"]', '$2y$13$4vD.GXSe8mPw/AGT1MkCDeFuFIyo4w7yrxDOYyMwa/OqUerNrxyWi');
INSERT INTO `utilisateur` (`email`, `roles`, `mot_de_passe`)
VALUES ('user3@exemple.com', '[\"ROLE_USER\"]', '$2y$13$4vD.GXSe8mPw/AGT1MkCDeFuFIyo4w7yrxDOYyMwa/OqUerNrxyWi');

INSERT INTO `offre_de_stage` (`titre`, `salaire`, `duree`, `description`, `brouillon`)
VALUES ('Gestion des ventes F/H', '1 900 € / mois', '3 mois', 'En tant que responsable de la gestion des ventes, votre rôle consistera à orchestrer les opérations de vente, de la planification à l\'exécution, tout en maintenant des relations solides avec nos clients.', '0');
INSERT INTO `offre_de_stage` (`titre`, `salaire`, `duree`, `description`, `brouillon`)
VALUES ('Gestion des commandes F/H', '1 800 € / mois', '1 ~ 2 mois', 'En qualité de responsable de la gestion des commandes, votre mission consistera à coordonner le processus de commande de bout en bout, assurant une exécution fluide et une satisfaction client optimale.', '0');
INSERT INTO `offre_de_stage` (`titre`, `salaire`, `duree`, `description`, `brouillon`)
VALUES ('Assistant boulanger F/H', '2 000 € / mois', '2 ~ 4 mois', 'En tant qu\'assistant boulanger, vous serez le soutien indispensable de notre équipe de production. Votre rôle consistera à préparer les ingrédients, assister dans le pétrissage, la cuisson et des produits de boulangerie.', '1');
