
## Steps to install dependencies and run the backend with docker and docker-compose

Clone the project:
```shell
git clone git@github.com:pedrocarreira1/birds-backend-api.git
```

Change directory to the project folder:
```shell
cd birds-birds-backend-api
```

Copy the .env.example file and create .env:
```shell
cp .env.example .env
```

Build the service containers with docker-compose:
```shell
docker-compose build
```

Start and run containers:
```shell
docker-compose up -d 
```

Open postman (or see in the browser) and do a GET request at:
```
http://localhost:3000/api/images
```
