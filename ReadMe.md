### How to run 

start by cloning the repo than

1. Start mercure using this command (docker used):
    ```BASH
    docker run -e JWT_KEY='!ChangeMe!' -e ALLOW_ANONYMOUS=1 \
     -e CORS_ALLOWED_ORIGINS="*" -e PUBLISH_ALLOWED_ORIGINS='*' \
     -e DEBUG=1 -p 9090:80 dunglas/mercure:v0.10.2
    ```

2. Run the symfony 4 app using:
    ```BASH
    php -S localhost:8000 -t public
    ``` 

3. Open the chat url `http://localhost:8000/chat` in two different browser

## original code [1][1]

[1]: https://medium.com/@stefan.poeltl/instant-realtime-notifications-with-symfony-and-mercure-e45270f7c8a5