var path = require('path');

module.exports = {
    entry: path.resolve(__dirname,'main.js'),
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname,'../../../public/js')
    },
    resolve:{
        extensions: ['.js','.vue'],
        alias: {
            'vue$': 'vue/dist/vue.esm.js',
            '@page': './pages/',
            '@components': './components'
        }
    },
    module: {
        loaders: [
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            {
                test: /\.js/,
                loader: 'babel-loader',
                query: {
                    presets: ['es2015']
                }
            }
        ]
    }
}