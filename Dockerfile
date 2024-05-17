# Mavenビルドステージ
FROM maven:3-eclipse-temurin-21 AS build
WORKDIR /app
COPY . .
RUN mvn clean package -Dmaven.test.skip=true

# ランタイムステージ
FROM eclipse-temurin:17-alpine AS runtime
WORKDIR /app
COPY --from=build /app/target/todoapp-0.0.1-SNAPSHOT.jar demo.jar
EXPOSE 8080
ENTRYPOINT ["java", "-jar", "demo.jar"]
