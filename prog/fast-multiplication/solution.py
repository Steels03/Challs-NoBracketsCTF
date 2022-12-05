import requests
import bs4

url = 'http://127.0.0.1:8888/index.php' # URL du site affichant le calcul
r = requests.get(url) # Requète GET sur l'URL

soup = bs4.BeautifulSoup(r.text, 'lxml') # Utilisation de bs4 pour le parsing de la page HTML de retour
calcul = soup.find(name="h3") # On récupère le contenu de la balise H3 (celle qui contien le calcul)
n1 = str(calcul).split('<h3>')[1].split(' ')[0] # On met en forme pour réaliser le calcul
n2 = str(calcul).split('x ')[1].split('</h3>')[0] # Idem
somme = int(n1) * int(n2)

url_response = 'http://127.0.0.1:8888/results.php' # URL du site recevant le résultat et affichant le flag
r_res = requests.post(url_response, data={"reponse": somme}) # Requète POST sur l'URL avec le résultat du calcul dans le paramètre "reponse"
print(r_res.text) # Affichage de la page de sortie avec le flag