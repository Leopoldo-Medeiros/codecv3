// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  css: ["~/assets/css/main.css"],
  build: {
    postcss: {
      postcssOptions: require("./postcss.config.js"),
    },
  },
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
  app: {
    head: {
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
