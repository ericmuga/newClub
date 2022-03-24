import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import dayjs from 'dayjs'
 import PrimeVue from 'primevue/config'
 import InputText from 'primevue/inputtext'
 import Toast from 'primevue/toast'
 import Button from 'primevue/button'
 import 'primevue/resources/themes/saga-blue/theme.css'       //theme
 import 'primevue/resources/primevue.min.css'                 //core css
 import 'primeicons/primeicons.css'
 import SelectButton from 'primevue/selectbutton';                        //icons
 import Dropdown from 'primevue/dropdown';
 import Checkbox from 'primevue/checkbox';
 import Textarea from 'primevue/textarea';

//  import Breadcrumb from 'primevue/breadcrumb';\
import Breadcrumbs from '@/components/Breadcrumbs.vue'
import FileUpload from 'primevue/fileupload';
import Pagination from '@/components/Pagination.vue'
import SpacedRule from '@/components/SpacedRule.vue'
import MultiSelect from 'primevue/multiselect';
import InputNumber from 'primevue/inputnumber';


import route from "ziggy-js";
import ToastService from 'primevue/toastservice';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        const VueApp = createApp({ render: () => h(app, props) });

        VueApp.config.globalProperties.$date = dayjs;

        VueApp.use(plugin)
             .component("Link",Link)
            .use(PrimeVue)
            .use(ToastService)
            .component('InputText',InputText)
            .component('Button',Button)
            .component('Dropdown',Dropdown)
            .component('Pagination',Pagination)
            .component('SpacedRule',SpacedRule)

            // .component('Breadcrumb',Breadcrumb)
            .component('Checkbox',Checkbox)
            .component('MultiSelect',MultiSelect)
            .component('Toast',Toast)
            .component('Breadcrumbs',Breadcrumbs)
            .component('FileUpload',FileUpload)
            .component('Textarea',Textarea)
            .component('InputNumber',InputNumber)
            .mixin({ methods: { route } })
            .mount(el);
    },
});
InertiaProgress.init()
