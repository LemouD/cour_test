# cour_test Evaluation

## Getting Started

### Prerequisites

What things you need to install the software and how to install them?

- [Docker CE](https://www.docker.com/community-edition)
- [Docker Compose](https://docs.docker.com/compose/install)

### Install

- (optional) Create your `docker-compose.override.yml` file

```bash
cp docker-compose.override.yml.dist docker-compose.override.yml
```
> Notice : Check the file content. If other containers use the same ports, change yours.

#### Init

```bash
cp .env.dist .env
docker-compose up -d
docker-compose exec web composer install
docker-compose exec web php bin/console d:s:u --force
docker-compose exec web php bin/console d:f:l
```
