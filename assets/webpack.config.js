const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

// Define directories
const LIB_DIR = path.resolve(__dirname, 'src/library');
const BUILD_DIR = path.resolve(__dirname, 'build');

// Entry points for JavaScript and SCSS
const entry = { 
    main: path.resolve(__dirname, 'src/js/main.js'),
    search: path.resolve(__dirname, 'src/sass/main.scss'),
    editor: path.resolve(__dirname, 'src/sass/editor.scss'),
    fonts: path.resolve(__dirname, 'src/library/fonts/fonts.css'),
    bootstrap: path.resolve(__dirname, 'node_modules/bootstrap/scss/bootstrap.scss'),
};

// Output directory and naming for bundled files
const output = {
    path: path.resolve(__dirname, 'build'),
    filename: 'js/[name].js',
};

// Plugins for build optimization and functionality
const plugins = (argv) => [
    new CleanWebpackPlugin({
        cleanStaleWebpackAssets: argv.mode === 'production',
    }),
    new MiniCssExtractPlugin({
        filename: 'css/[name].css',
    }),
    new CopyWebpackPlugin({
        patterns: [
            { from: 'src', to: 'build', globOptions: { ignore: ['**/*.js', '**/*.scss', '**/*.css'] } },
            { from: LIB_DIR, to: `${BUILD_DIR}/library`, globOptions: { ignore: ['**/bootstrap.min.css'] } },
        ],
    }),
];

// Module rules for processing JS and SCSS files
const rules = [
    {
        test: /\.js$/,
        exclude: /node_modules/,
        use: 'babel-loader',
    },
    {
        test: /\.scss$/,
        use: [
            MiniCssExtractPlugin.loader,
            'css-loader',
            'postcss-loader', // Autoprefixer through PostCSS
            'sass-loader',
        ],
    },
    {
        test: /\.css$/,
        use: [
            MiniCssExtractPlugin.loader,
            'css-loader',
        ],
    },
];

// Resolve configurations for file extensions
const resolve = {
    extensions: ['.js', '.json', '.wasm', '.scss', '.css'],
};

// Exporting the Webpack configuration
module.exports = (env, argv) => ({
    entry: entry,
    output: output,
    devtool: 'source-map',
    module: {
        rules: rules,
    },
    plugins: plugins(argv),
    resolve: resolve,
    optimization: {
        minimize: true,
        minimizer: [
            new CssMinimizerPlugin(),
            new TerserPlugin({
                parallel: true,
                terserOptions: {
                    sourceMap: false,
                },
            }),
        ],
    },
    externals: {
        jquery: 'jQuery',
    },
});
