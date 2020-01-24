const path = require('path')
const MiniCSSExtractPlugin = require('mini-css-extract-plugin')
const HtmlWebpackPlugin = require('html-webpack-plugin')
const webpack = require('webpack')

module.exports={
    entry: { 
        index:["@babel/polyfill", path.resolve(__dirname,'src/js/index.js') ],
    },
    mode:'development',
    output:{
        path: path.resolve(__dirname,'sources/'),
        filename:'js/[name].js'
    },
    devServer:{
       hot:true,
        open:true,
        port:9000,
    },
    module:{
        rules:[
            {
                test: /\.js$/,
                use: {
                    loader:'babel-loader',
                    options: {
                        presets: [
                            "@babel/preset-env",
                            "@babel/preset-react"
                        ]
                      }
                },
                exclude:/node_modules/
                    
               
            },{
                test: /\.css$/,
                use:[{
                    loader:MiniCSSExtractPlugin.loader
                },'css-loader']
            }
        ]
    },
    plugins:[
      new webpack.HotModuleReplacementPlugin(),
        new HtmlWebpackPlugin({
            title:'Plugin',
            template: path.resolve(__dirname,'indexxx.html')
        }),
        new MiniCSSExtractPlugin({
            filename: 'css/[name].css'
        })
    ]
}