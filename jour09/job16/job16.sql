SELECT etage.nom , salles.nom, salles.capacite
FROM salles
JOIN etage on etage.id = salles.id_etage
ORDER BY capacite DESC LIMIT 1