# ベースイメージとしてPHPを使用し、Apacheをインストール
FROM php:8.2-apache

# Apacheのモジュールを有効化
RUN a2enmod rewrite

# Composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Laravelプロジェクトの依存関係をインストール
WORKDIR /var/www/html
COPY . /var/www/html
# RUN composer install

# 権限の設定
RUN chown -R www-data:www-data /var/www/html
RUN chmod 775 -R /var/www/html

