FROM escolalms/php:8-prod
WORKDIR /var/www/html
EXPOSE 80
COPY / /var/www/html
RUN apt-get update && apt-get install nginx -y
RUN cp docker/envs/.env.postgres.example /var/www/html/.env \
  && cp docker/conf/supervisor/nginx.conf /etc/supervisor/custom.d/nginx.conf \
  && cp docker/conf/supervisor/scheduler.conf /etc/supervisor/custom.d/scheduler.conf \
  && cp docker/conf/supervisor/horizon.conf /etc/supervisor/custom.d/horizon.conf \
  && cp docker/conf/nginx/nginx.conf  /etc/nginx/nginx.conf \
  && cp docker/conf/nginx/site-in-docker.conf /etc/nginx/conf.d/php.conf 
RUN composer install --no-scripts
RUN chown -R devilbox:devilbox /var/www/

