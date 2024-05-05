import { resolve } from 'path';
import { defineConfig } from 'vite';



export default defineConfig({
    plugins: [
    ],
    build: {
        lib: {
            entry: resolve(__dirname, 'ts/index.ts'),
            name: 'WordsphereUi',
            fileName: 'wordsphereui'
        }
    }
});
