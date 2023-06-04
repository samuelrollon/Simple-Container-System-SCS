FROM mysql:latest
COPY dbcreation.sql /docker-entrypoint-initdb.d/