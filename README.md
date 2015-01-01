docker-php52
============

apache and php5.2

build it

docker build -t php52 .

run it

docker run -d --name php52 -v /var/www:/home/mssagar:rw -p 81:80 --link mysql:db php52 /sbin/my_init --enable-insecure-key
