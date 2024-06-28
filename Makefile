# Use the `up` target to start the Docker Compose in detached mode
up:
   docker-compose up -d
.PHONY: up

# Use the `stop` target to stop the Docker Compose
stop:
   docker-compose stop
.PHONY: stop

# Use the `down` target to take down the Docker Compose
down:
   docker-compose down
.PHONY: down

