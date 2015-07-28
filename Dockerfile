# from statement goes at the top of every Dockerfile
from tutum/apache-php
MAINTAINER Joshua Harris <joshua.j.harris@nasa.gov>

RUN apt-get update

ADD ./www /app

RUN composer install

EXPOSE 80
