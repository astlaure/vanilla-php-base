const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

/** @type {import('webpack').Configuration} */
const config = {
  entry: ['./assets/js/main.js', './assets/sass/style.scss'],
  output: {
    filename: 'js/[name].js',
    path: path.resolve('public'),
    iife: false,
  },
  mode: 'development',
  module: {
    rules: [
      {
        test: /\.s?css$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'resolve-url-loader',
          {
            loader: 'sass-loader',
            options: {
              sourceMap: true,
            },
          }
        ]
      },
      {
        test: /\.(png|svg|jpe?g|gif)$/,
        type: 'javascript/auto',
        use: {
          loader: 'file-loader',
          options: {
            emitFile: true,
            name: '[name].[ext]',
            outputPath: 'images',
          },
        },
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/style.css',
    }),
  ],
  devtool: 'source-map',
};

module.exports = config;
