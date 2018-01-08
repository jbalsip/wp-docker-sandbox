# WP-DOCKER-SANDBOX

This is just a repo to help with developing a WordPress theme using docker containers to simplify setting up WordPress itself.  It will be a starting point for a personal custom theme project, so the name of this repo might change too.

## Docker Cheatsheet
(Run terminal as administrator if in Windows.  If running in Linux, commands need to be prefixed with `sudo` or the shell needs to run as root)

Bring up the containers in detached mode (run without `-d` to attach the console output, helpful for debugging)
```bash
docker-compose up -d
```

Stop the running containers
```bash
docker-compose stop
```

Start up the containers again
```bash
docker-compose start
```

Stop the running containers and remove them (this command is destructive so be careful)
Don't forget the `-v`, or else you will have dangling volumes.
```bash
docker-compose down -v
```

Remove dangling volumes
```bash
docker volume rm `docker volume ls -q -f dangling=true`
```

[docker-compose reference](https://docs.docker.com/compose/reference/)