### How to run 

1. start by cloning the repo than install php dependencies
    ```BASH
    composer install
    ```

2. Start mercure using this command (docker used):
    ```BASH
    docker run -e JWT_KEY='!ChangeMe!' \
     -e CORS_ALLOWED_ORIGINS="*" -e PUBLISH_ALLOWED_ORIGINS='*' \
     -e DEBUG=1 -p 9090:80 dunglas/mercure:v0.10.2
    ```

3. Run the symfony 4 app using:
    ```BASH
    php -S localhost:8000 -t public
    ``` 

> N.B: Open the chat url `http://localhost:8000/chat` in two different browsers, also you can open http://localhost:8000/client to view all old message


## original code [1][1]

[1]: https://medium.com/@stefan.poeltl/instant-realtime-notifications-with-symfony-and-mercure-e45270f7c8a5
