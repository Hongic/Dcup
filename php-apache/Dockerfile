# 自定义基础镜像 
FROM    php:7.1-apache

# 作者信息
MAINTAINER  Hongic<2308952205@qq.com>

# 安装 pdo_mysql 扩展
RUN     docker-php-ext-install  pdo_mysql 

# 安装pecl官网的redis扩展
#RUN pecl install redis \
#    && docker-php-ext-enable redis

#ADD https://pecl.php.net/get/redis-3.0.0.tgz /hongic/
# 参考官网镜像文档，安装redis扩展
RUN mkdir /hongic \
    && cd /hongic \
    && curl -fsSL 'https://pecl.php.net/get/redis-3.0.0.tgz' -o redis-3.0.0.tgz \
    && tar -xf  redis-3.0.0.tgz  \
    && ( \
        cd /hongic/redis-3.0.0 \
        && /usr/local/bin/phpize \
        && ./configure --with-php-config=/usr/local/bin/php-config \
        && make -j$(nproc) \
        && make install \
    ) \
    && rm -r /hongic \
    && docker-php-ext-enable redis

