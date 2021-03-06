import i18n from './config/i18n'

export default {
  // Target: https://go.nuxtjs.dev/config-target
  target: 'static',
  loadingIndicator: {
    name: 'circle',
    color: '#3B8070',
    background: 'white'
  },

  googleFonts: {
    families: {
      // a simple name
      Roboto: true,
      
      // a name with spaces
      'Nunito+Sans': true,
  
      // specific font weights
      Lato: [300, 400, 500, 600],
    }
  },

  ssr: false,
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'ib_cards_client',
    htmlAttrs: {
      lang: 'en'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    '~/static/main.css'
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [

  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [[
    'nuxt-i18n',
    {
      vueI18nLoader: true,
      defaultLocale: 'hr',
       locales: [
        {
           code: 'en',
           name: 'English'
        },
        {
           code: 'hr',
           name: 'Hrvatski'
        }
      ],
      vueI18n: i18n
    }
   ],
    // https://go.nuxtjs.dev/typescript
    '@nuxt/typescript-build',
    // https://go.nuxtjs.dev/tailwindcss
    '@nuxtjs/tailwindcss',
    '@nuxtjs/google-fonts'
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    '@nuxtjs/i18n',
    '@nuxtjs/axios',
  ],

  i18n: {
    locale : [
      { code: 'hr', iso: 'en-US', file: './locales/hr.json', dir: 'ltr' },
    ],
    
    defaultLocale: 'hr',
    vueI18n: i18n
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {

  }
}
