#/bin/bash
docker run --rm -p 3306:3306 --name maria -e MYSQL_ROOT_PASSWORD=deadbeef -d mariadb:latest
