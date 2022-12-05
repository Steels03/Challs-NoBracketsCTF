docker build -t lfi-chall .
docker run -it -p 8888:80 lfi-chall
