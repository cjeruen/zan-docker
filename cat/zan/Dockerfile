FROM debian:jessie

COPY settings.xml /root/.m2/settings.xml

ADD src/jdk1.8.0_152.tar.gz /cat
ADD src/apache-maven-3.5.2.tar.gz /cat

ADD src/cat-2.0.0.tar.gz /cat
ADD src/mvn-repo.tar.gz /cat

ENV JAVA_HOME /usr/local/java
ENV PATH $JAVA_HOME/bin:$PATH
ENV CLASSPATH .:$JAVA_HOME/lib

ENV M2_HOME /usr/local/maven
ENV PATH $M2_HOME/bin:$PATH

RUN    ln -s /cat/jdk1.8.0_152 /usr/local/java \
    && ln -s /cat/apache-maven-3.5.2 /usr/local/maven \
    && mkdir -p /data/appdatas/cat \
    && mkdir -p /data/applogs/cat \
    && mkdir -p /root/.m2/repository \
    && cp -R /cat/mvn-repo/* ~/.m2/repository/ \
    && cd /cat/cat-2.0.0 \
    && mvn clean install -DskipTests


RUN echo "Asia/Shanghai" > /etc/timezone

EXPOSE 2280
EXPOSE 2281
