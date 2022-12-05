# Don't trust user input

Le site web nous permet d'effectuer des `traceroute` sur l'IP que nous lui fournissont.
Or `traceroute` est un outil qui est utilisé directement en ligne de commande, il est alors possible que l'entrée de l'utilisateur ne soit pas vérifiée, ce qui nous permettrait d'executer des commandes système arbitraires.

Il suffit alors de concaténer notre commande derrière une IP pour obtenir le flag :
`127.0.0.1 && cat flag`
