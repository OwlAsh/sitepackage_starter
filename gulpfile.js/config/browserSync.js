var config = require('./');

module.exports = {
    server: false,
    open: false,
    files: [config.sourceDirectory + '/{Layouts,Partials,Templates}/**/*.html']
};
