# client

## ENV Documentation
### file .env
#### VUE_APP_BASE_URL
menentukan base url project
misal: url untuk akses app vue {base_url}/dashboard
maka nilai dari **VUE_APP_BASE_URL** adalah `dashboard`

### vue.vonfig.js
```
...
outputDir: path.resolve(__dirname, '../public/client'),
assetsDir: 'assets',
publicPath: '/client',
...
```
### `outputDir` : directory hasil build dari vue client 

### `assetsDir` : (relative terhadap outputDir) lokasi asset dari vue client
misal: `assetsDir = assets`
semua assets yang di load di vue client akan ditempatkan `{rootDirVueApp}/assets`

### `publicPath`: prefix static file 
misal : `publicPath: '/client'`,
maka semua file static di vue app client memiliki base_url `{root}/client`
value ini berelasi dengan `outputDir`
ketika outputDir `/public/client` maka semua static file diakses dengan url {root}/client.

*root directory app laravel `public`
___


## Project setup
```
npm install
```
## copy env file
```
cp .env.example .env
```

### Compiles and hot-reloads for development
```
npm run serve
```

### Compiles and minifies for production
```
npm run build
```

### Run your tests
```
npm run test
```

### Lints and fixes files
```
npm run lint
```




