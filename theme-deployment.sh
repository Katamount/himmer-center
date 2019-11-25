#!/bin/bash
# tar up the theme
tar -cvf himmer-2019.tar ./wp-content/themes/himmer-2019
# upload the theme
scp -i ~/.ssh/webserver.pem ./himmer-2019.tar ubuntu@18.190.78.242:~
# upload the compose file
scp -i ~/.ssh/webserver.pem ./docker-compose.yml ubuntu@18.190.78.242:~
# run docker-compose down, turn off the wordpress site
ssh -i ~/.ssh/webserver.pem ubuntu@18.190.78.242 'sudo docker-compose down'
# run docker-compose up, turn on the wordrpess site
ssh -i ~/.ssh/webserver.pem ubuntu@18.190.78.242 'sudo docker-compose up -d'
