const path = require('path')

module.exports = {
  outputDir: path.resolve(__dirname, '../public/client'),
  assetsDir: 'assets',
  publicPath: '/client',
  devServer: {
    proxy: {
      '^/api': {
        target: 'http://localhost:8000',
        ws: true,
        changeOrigin: true
      }
    }
  }
}
