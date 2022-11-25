SELECT etage.nom as noms_etages, salles.nom as noms_salles
FROM etage join salles on salles.id_etage = etage.id


