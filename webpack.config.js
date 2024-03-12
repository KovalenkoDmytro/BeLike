const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const path = require("path");


// change these variables to fit your project
const baseUrl = "./app/theme/assets/";
const outputPath = "./app/theme/public/";
const localDomain = "http://localhost:8080/";

module.exports = {
    entry: [baseUrl + "js/main.js", baseUrl + "scss/main.scss"],
    output: {
        path: path.resolve(__dirname, outputPath),
        filename: "app.js",
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "app.css",
        }),
        new BrowserSyncPlugin(
            {
                proxy: localDomain,
                files: [outputPath + "/*.css", outputPath + "/*.js","*.php"],
                injectCss: true,
            },
            { reload: false }
        ),
    ],
    module: {
        rules: [
            {
                test: /\.scss$/i,
                use: [MiniCssExtractPlugin.loader, "css-loader",
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                plugins: function () {
                                    return [require('autoprefixer')]
                                }
                            }

                        }
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            sourceMap: true,
                            sassOptions: {
                                outputStyle: "compressed",
                            },
                        },
                    },
                ],
            },
        ],
    },
    optimization: {
        minimize: true,
        minimizer: [
            new CssMinimizerPlugin(),
        ],
    },
};