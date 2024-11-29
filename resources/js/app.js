import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';

createInertiaApp({
    resolve: name => {
        try {
            // Dynamically import the page component
            return import(`./Pages/${name}.vue`);
        } catch (error) {
            console.error(`Could not resolve component: ${name}`);
            throw error;
        }
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
