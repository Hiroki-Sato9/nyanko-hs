# Node.jsのベースイメージを使用
FROM node:18

# 作業ディレクトリを設定
WORKDIR /var/www

# プロジェクトファイルをコンテナにコピー
COPY package*.json ./

# 依存関係をインストール
RUN npm install

# 残りのソースコードをコピー
COPY . .

# 開発サーバーを起動
CMD ["npm", "start"]
