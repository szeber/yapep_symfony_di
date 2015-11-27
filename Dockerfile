FROM ubuntu:latest

# Download and install php, nginx, and supervisor, hey, just linux for a change!
RUN apt-get update
RUN apt-get install -y php5-fpm nginx supervisor php5-xdebug

# Setup config files
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
ADD ./Docker/nginx/default /etc/nginx/sites-enabled/default
ADD ./Docker/supervisor/supervisord.conf /etc/supervisor/supervisord.conf
ADD ./Docker/php-fpm/php-fpm.conf /etc/php5/fpm/php-fpm.conf

# Shared volume
RUN mkdir -p /var/www
VOLUME ["/var/www"]

# Default command for container, start supervisor
CMD ["supervisord", "--nodaemon"]
USER root

# Expose port 80 of the container
EXPOSE 80
