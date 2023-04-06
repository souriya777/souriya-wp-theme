import { resolve } from 'path';

export default {
  build: {
    outDir: '../www/wp-content/themes/souriya-wp-theme/',
    rollupOptions: {
      input: {
        'style': resolve(__dirname, 'css/main.scss'),
      },
      output: {
        assetFileNames: (assetInfo) => {
          return `style.css`;
        },
      }
    }
  },
}
