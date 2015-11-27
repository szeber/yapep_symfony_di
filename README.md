# Installation

* Install docker (http://docker.com)
* cd into the project's directory
* Enter `docker build -t szeber/symfony-demo:v1 .` to build the container. This may take a few minutes.
* Enter `docker run --name symfony-demo -v `pwd`:/var/www -p 8080:80 szeber/symfony-demo:v1` to run the container. This will forward port 80 of the container to port 8080 of your host
* Visit http://<hostIp>:8080/ in a browser