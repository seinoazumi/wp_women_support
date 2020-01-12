const ExtractTextPlugin = require('extract-text-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode: 'development',
  // 様々なモジュールがバンドルされるファイル
  entry: './assets/js/bundle.js',
  output: {
    // プロジェクトのルート
    path: `${__dirname}`,
    // index.htmlに読み込まれるJSファイル
    filename: './assets/js/main.js'
  },
  devServer:{
    contentBase: '.'
  },
  devtool: 'eval-source-map',
  module: {
    rules: [
      // css/sass-loaderの設定
      {
        test: /\.(scss|css)$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              url: false
            }
          },
          // Sassをバンドルするための機能
          {
            loader: "sass-loader",
            options: {
              // ソースマップの利用有無
              sourceMap: true
            }
          }
        ]
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'style.css'
    }),
  ]
};
