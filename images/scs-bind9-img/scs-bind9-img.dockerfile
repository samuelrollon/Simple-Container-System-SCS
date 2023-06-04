FROM ubuntu/bind9:latest
RUN apt update -y && apt upgrade -y && apt install dnsutils -y
