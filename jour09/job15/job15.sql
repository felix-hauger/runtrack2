SELECT salles.nom, etages.nom
FROM salles
INNER JOIN etages ON salles.id_etage = etages.id