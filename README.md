# This is a demo application using the symfony DI container in the YapepBase framework

The demo has a web application (app/www) and a batch application (batch/Test/batch/test.php. The web application can be configured via Docker.

A hosted version is available on [Heroku](https://powerful-caverns-3842.herokuapp.com/)

## Installation

* Install [docker](http://docker.com)
* cd into the project's directory
* Enter `docker build -t szeber/symfony-demo:v1 .` to build the container. This may take a few minutes.
* Enter `docker run --name symfony-demo -v `pwd`:/var/www -p 8080:80 szeber/symfony-demo:v1` to run the container. This will forward port 80 of the container to port 8080 of your host
* Visit http://<hostIp>:8080/ in a browser