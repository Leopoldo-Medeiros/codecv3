import fs from "fs";

let server = {}

// If we're in dev we'll need to run this from
// a https server for the newer chromium browsers.
if (process.env.LANDO === 'ON') {
  server = {
    host: '0.0.0.0',
    https: {
      key: fs.readFileSync('/lando/certs/proxy._lando_.key'),
      cert: fs.readFileSync('/lando/certs/proxy._lando_.crt')
    }
  }
}

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  server,
  vue: {
    config: {
      productionTip: true,
      devtools: (process.env.DEV_TOOLS !== 'false')
    }
  },
  modules: [
    'nuxt-sanctum-auth',
    '@nuxt/image-edge'
  ],
  // Disable server-side rendering: https://go.nuxtjs.dev/ssr-mode
  ssr: false,
  nuxtSanctumAuth: {
    token: false, // set true to test jwt-token auth instead of cookie
    baseUrl: process.env.API_URL,
    endpoints: {
      csrf: '/sanctum/csrf-cookie',
      login: '/login',
      logout: '/logout',
      user: '/api/me'
    },
    redirects: {
      home: '/',
      login: '/login',
      logout: '/'
    }
  },
  // Target (https://go.nuxtjs.dev/config-target)
  target: 'server',
  css: ["@/assets/css/main.css"],
  build: {
    postcss: {
      postcssOptions: require("./postcss.config.js"),
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
