import fs from 'fs';

// https://nuxt.com/docs/api/configuration/nuxt-config
// @ts-ignore
// @ts-ignore
export default defineNuxtConfig({
  runtimeConfig: {
    public: {
      baseUrl: process.env.BASE_URL,
      apibaseUrl: process.env.API_URL,
      authentication: {
        token: false, // set true to test jwt-token auth instead of cookie
        endpoints: {
          csrf: '/sanctum/csrf-cookie',
          cms: {
            login: '/cms/login',
            logout: '/cms/logout'
          },
          site: {
            login: '/login',
            logout: '/logout'
          },
          user: '/api/me'
        },
        redirects: {
          cms: {
            home: '/cms/dashboard',
            login: '/cms/login',
            logout: '/cms/login'
          },
          site: {
            home: '/',
            login: '/login',
            logout: '/'
          }
        }
      }
    }
  },
  vite: {
    server: {
      hmr: {
        protocol: 'ws',
        host: '172.18.0.2',
        clientPort: 54345,
        port: 54345
      },
      ports:
        -'54345:54345'
    },
    host: '0.0.0.0',
    https: {
      key: fs.readFileSync('/lando/certs/proxy._lando_.key'),
      cert: fs.readFileSync('/lando/certs/proxy._lando_.crt')
    }
  },
  vue: {
    config: {
      productionTip: true,
      devtools: (process.env.DEV_TOOLS !== 'false')
    }
  },
  modules: [
    '@nuxt/image-edge',
    '@pinia/nuxt',
    '@pinia-plugin-persistedstate/nuxt'
  ],
  alias: {
    pinia: '/node_modules/@pinia/nuxt/node_modules/pinia/dist/pinia.mjs'
  },
  // Disable server-side rendering: https://go.nuxtjs.dev/ssr-mode
  ssr: false,
  nuxtSanctumAuth: {
    token: false, // set true to test jwt-token auth instead of cookie
    baseUrl: process.env.BASE_URL,
    endpoints: {
      csrf: '/sanctum/csrf-cookie',
      login: '/cms/login',
      logout: '/logout',
      user: '/api/me'
    },
    redirects: {
      home: '/',
      login: '/cms/login',
      logout: '/'
    }
  },
  target: 'server',
  css: ['@/assets/css/main.css'],
  build: {
    postcss: {
      postcssOptions: require('./postcss.config.js'),
    },
    hotMiddleware: {
      client: {
        autoConnect: false,
      },
    },
    indicator: false,
  },
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
  app: {
    head: {
      title: 'Application Name',
      content: 'Application Name',
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1',
      link: [
        {
          rel: 'apple-touch-icon',
          href: '/img/icons/apple-touch-icon.png',
          sizes: '180x180',
        },
        {
          rel: 'icon',
          href: '/img/icons/favicon-32x32.png',
          type: 'image/png',
          sizes: '32x32'
        },
        {
          rel: 'icon',
          href: '/img/icons/favicon-16x16.png',
          type: 'image/png',
          sizes: '16x16'
        },
        {
          rel: 'manifest',
          href: '/img/icons/site.webmanifest'
        },
        {
          rel: 'mask-icon',
          href: '/img/icons/safari-pinned-tab.svg',
          color: '#5bbad5'
        }
      ],
      meta: [
        {
          name: 'msapplication-TileColor',
          content: '#fe5759'
        },
        {
          name: 'theme-color',
          content: '#ffffff'
        }
      ]
    }
  }
})
