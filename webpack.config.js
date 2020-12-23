const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const webpack = require('webpack');

module.exports = {
    entry: ['./development/app.js'],
    output: {
        path: path.resolve("./source/wp-content/themes/perezdelolmo", './'),
        filename: 'js/bundle.js'
    },
    devtool: 'source-map',
    module: {
        rules: [
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                        publicPath: '../'
                        },
                    },
                    {
                        loader: 'css-loader',
                        options: {
                        importLoaders: 2,
                        sourceMap: true
                        }   
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            sourceMap: true
                        } 
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                        sourceMap: true,
                            sassOptions: {
                                outputStyle: 'compressed',
                            }
                        } 
                    },
                ]
            },
            {
                test: /\.js$/,
                exclude: '/node_modules/',
                use: [{
                      loader: 'babel-loader',
                      options: {
                        presets: [
                          '@babel/preset-env'
                        ]
                      }
                }]
            },
            {
                test: /\.(jpg|png|gif|jpeg|svg)$/,
                exclude: [/webfonts/, /partials/],
                use: [{
                  loader: 'file-loader',
                  options: {
                    name: '[name].[ext]',
                    outputPath: './assets/img',
                    esModule: false,
                  }
                }]
            },
            {
                test: /\.(ttf|woff|woff2|eot|svg)$/i,
                exclude: [/img/, /image/],
                use: [{
                  loader: 'file-loader',
                  options: {
                    outputPath: 'assets/webfonts',
                    name: '[name].[ext]'
                  }
                }]
            },
          
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/style.css'
        }),
        new webpack.SourceMapDevToolPlugin(
            {
              filename: "css/source.css.map",
              test: /\.(sa|sc|c)ss$/
            },
        ),
    ]
}