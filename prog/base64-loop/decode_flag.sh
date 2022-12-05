#!/bin/bash

# On initialise la variable flag avec le contenu du fichier contenant le flag encodé
flag=$(cat ./encoded_flag)

# Tant que "NBCTF" n'est pas dans le flag, on continue de décoder en base64
while [[ "$flag" != *"NBCTF"* ]]
do
    flag=$(echo "$flag" | base64 -d) # On décode en base64 le flag
done
echo "$flag" # On affiche le flag lorsque NBCTF est dedans