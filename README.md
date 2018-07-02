# yaf-project

### nginx 配置

~~~
server {
        server_name  www.yaf.com;
        listen 80;
        index index.php;
        root  /Users/mac/web/yaf;
        location / {
             if (!-e $request_filename) {
                    rewrite ^/(.*)  /index.php/$1 last;
             }
        }
        location ~ \.php$ {
                    try_files        $uri =404;
                    fastcgi_pass     127.0.0.1:9000;
                    fastcgi_param    SCRIPT_FILENAME $document_root$fastcgi_script_name;
                    include          fastcgi_params;
            }
        location ~ /\. {
                deny all;
        }
}
~~~