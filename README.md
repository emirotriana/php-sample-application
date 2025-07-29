# Aplicación PHP Twitter - Configuración Docker

## Descripción
Se conteneriza la aplicación PHP con dos contenedores:
- **Contenedor Web**: PHP 8.1 con Apache con la aplicación
- **Contenedor Base de Datos**: MySQL 8.0 con la base de datos

## Inicio Rápido

### Opción 1: Construir localmente
```bash
docker-compose up --build
```

### Opción 2: Usar imágenes de Docker Hub
1. Reemplaza `yourusername` o `etriana696` en `docker-compose-hub.yaml` con el nombre de usuario de Docker Hub real
2. Ejecuta:
```bash
docker-compose -f docker-compose-hub.yaml up
```

## Construir y Publicar Imágenes

1. **Construir la imagen:**
```bash
docker build -t <username>/php-app:latest ./php-sample-application
```

2. **Subir a Docker Hub:**
```bash
docker login
docker push <username>/php-app:latest
```

3. **O usar el script:**
```bash
chmod +x build-push.sh
./build-push.sh
```

## Acceder a la Aplicación
- Aplicación Web: http://localhost:8080
- MySQL: localhost:3306

## Variables de Entorno
- `DB_HOST`: Host de la base de datos (por defecto: mysql)
- `DB_NAME`: Nombre de la base de datos (por defecto: sample)
- `DB_USER`: Usuario de la base de datos (por defecto: sampleuser)
- `DB_PASS`: Contraseña de la base de datos (por defecto: samplepass)

## Archivos modificados
- Se añadió `config-dev/db-connection-container.php` para establecer la conexión a la base de datos desde contenedores
- Se ajustaron `dic/users.php` y `dic/tweets.php` para que utilicen la configuración de Docker
- Se creó el `Dockerfile` de la aplicación web
- Se lanzó `docker-compose.yaml` para el despliegue local mediante build
- Se introdujo `docker-compose-hub.yaml` para ejecutar utilizando las imágenes de Docker Hub
