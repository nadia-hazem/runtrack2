/*Ecrivez dans le fichier “job15.sql” une requête permettant de récupérer le nom des
salles et le nom de leur étage.*/

SELECT `salles`.`nom` AS `nom_salle`, `etages`.`nom` AS `nom_etage` FROM `salles` INNER JOIN `etages` ON `salles`.`etage_id` = `etages`.`id`