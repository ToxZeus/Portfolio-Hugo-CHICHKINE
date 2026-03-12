import * as esbuild from 'esbuild';

const watch = process.argv.includes('--watch');

const config = {
    entryPoints: ['src/ts/app.ts'],
    outfile: 'public/assets/js/app.js',
    bundle: true,
    format: 'esm',
    target: ['es2020'],
    minify: !watch,
    sourcemap: watch,
    logLevel: 'info',
};

if (watch) {
    const context = await esbuild.context(config);
    await context.watch();
    console.log('Watching TypeScript assets...');
} else {
    await esbuild.build(config);
}