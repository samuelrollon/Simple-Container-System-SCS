FROM daone/postfix-dovecot:latest
RUN apt update -y && apt upgrade -y && apt install nano -y
RUN useradd -m -s/bin/bash admintest1 && useradd -m -s/bin/bash admintest2
RUN echo "admintest1:debian" | chpasswd && echo "admintest2:debian" | chpasswd