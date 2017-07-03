FROM debian:jessie

# maven aliyun 镜像
COPY settings.xml /root/.m2/settings.xml

# 版本不对 有时候还真不行
ADD src/jdk-7u79-linux-x64.tar.gz /usr/local/
ADD src/apache-maven-3.5.0-bin.tar.gz /usr/local/
# ADD src/apache-tomcat-7.0.57.tar.gz /usr/local/

COPY src/cat /cat
COPY src/mvn-repo /mvn-repo

ENV JAVA_HOME /usr/local/java
ENV PATH $JAVA_HOME/bin:$PATH
ENV CLASSPATH .:$JAVA_HOME/lib

ENV M2_HOME /usr/local/maven
ENV PATH $M2_HOME/bin:$PATH

# ENV CATALINA_HOME /usr/local/tomcat
# ENV PATH $CATALINA_HOME/bin:$PATH

# ENV mysql_jdbcUrl jdbc:mysql://mysql_cat:3306
# ENV mysql_username root
# ENV mysql_password root

RUN    ln -s /usr/local/jdk1.7.0_79 /usr/local/java \
    && ln -s /usr/local/apache-maven-3.5.0 /usr/local/maven \
    # && ln -s /usr/local/apache-tomcat-7.0.57 /usr/local/tomcat \
    # && chmod +x /usr/local/tomcat/bin/* \
    && mkdir -p /data/appdatas/cat \
    && mkdir -p /data/applogs/cat \
    && mkdir -p /root/.m2/repository \
    && cp -R /mvn-repo/* ~/.m2/repository/ \
    && cd /cat \
    && mvn clean install -DskipTests

EXPOSE 2280
EXPOSE 2281

WORKDIR /cat/cat-home

# CMD ["catalina.sh", "run"]
ENTRYPOINT ["mvn", "jetty:run"]
# ENTRYPOINT ["/usr/local/tomcat/bin/startup.sh"]

