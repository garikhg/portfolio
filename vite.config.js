import {defineConfig} from 'vite';import path from 'path';import liveReload from 'vite-plugin-live-reload';// https://vitejs.dev/config/export default defineConfig({    plugins: [        liveReload(__dirname + '/**/*.php')    ],    root: '',    build: {        outDir: './dist',        emptyOutDir: true,        manifest: true,        target: 'es2018',        rollupOptions: {            input: {                main: path.resolve(__dirname, 'src/main.js'),            },            output: {                entryFileNames: `[name].js`,                chunkFileNames: `[name].js`,                assetFileNames: `[name].[ext]`            }        },        minify: true,        write: true,        css: {            preprocessorOptions: {                scss: {                    // Global SCSS variables or mixins can be imported here                    additionalData: `@import "${path.resolve(__dirname, 'src/global.scss')}";`                }            }        }    },})