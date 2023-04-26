import path from 'path';
import { defineConfig } from 'vite'
import { svelte } from '@sveltejs/vite-plugin-svelte'

export default defineConfig({
  plugins: [svelte()],
  build: {
    outDir: '../www/wp-content/themes/souriya-wp-theme/',
    rollupOptions: {
      input: {
        'style': path.resolve(__dirname, 'css/main.scss'),
        'main': path.resolve(__dirname, 'js/main.js')
      },
      output: {
        entryFileNames: 'js/[name].js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name.match(/\.css/)) {
            return `style.css`;
          } else {
            return `main.js`;
          }
        },
      }
    }
  },
})
