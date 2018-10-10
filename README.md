<center>👴 php52-geezer </center>
============

> ⬜️ a minimalist and nostalgic web framework based on apache and php5.2, run in docker.

### Feature
...

### Docker

apache and php5.2

###### # build it

    docker build -t=php52 .

###### # run it

    docker run -d --name php52 -v /path/to:/var/www:rw -p 81:80 --link mysql:db php52 /sbin/my_init --enable-insecure-key
