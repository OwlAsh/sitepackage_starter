var config = require('./');

module.exports = [
    {
      src: config.bowerDirectory + '/font-awesome/fonts/fontawesome-webfont.{eot,svg,ttf,otf,woff,wfoff2}',
      dest: config.publicDirectory + '/Fonts'
    }
];
