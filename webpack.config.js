// WordPress webpack config.
const defaultConfig = require('@wordpress/scripts/config/webpack.config');

// Utilities.
const path = require('path');

// Add any new entry points by extending the webpack config.
module.exports = {
    ...defaultConfig,
    ...{
        entry: {
            'js/editor': path.resolve(process.cwd(), 'resources/js', 'editor.js'),
            'css/screen': path.resolve(process.cwd(), 'resources/scss', 'screen.scss'),
            'css/editor': path.resolve(process.cwd(), 'resources/scss', 'editor.scss'),
        }
    }
};