
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"
import "bootstrap-icons/bootstrap-icons.svg"
import "bootstrap-icons/font/bootstrap-icons.min.css";
import './assets/main.css'

//import 'bootstrap/dist/js/bootstrap.bundle'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')

export default { router, app };
