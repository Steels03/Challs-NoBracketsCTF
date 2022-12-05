# Simple rébus (LFI)

La page d'accueil du challenge nous montre qu'une page avec un rébus est disponible à l'adresse suivante : 
`/index.php?page=rebus.php`

En déchiffrant le rébus on obtient le nom de la faille à exploiter pour obtenir le flag : Local File Inclusion.

L'exploitation consiste à lire des fichiers locaux en les spécifiants dans le paramètre `?page=` de l'url.

Le flag est alors obtenu de la sorte : 
`/index.php?page=flag`

