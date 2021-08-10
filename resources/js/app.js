require('./bootstrap');

import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.component('my-header', require('./template/Header.vue').default);
Vue.component('my-button', require('./template/Button.vue').default);
Vue.component('sidebar', require('./template/Sidebar.vue').default);
Vue.component('profile', require('./template/Profile.vue').default);
Vue.component('nav_button', require('./template/Nav_Button.vue').default);
Vue.component('worklog', require('./template/Worklog.vue').default);

const app = new Vue({
    el: '#app',   
})

const content = new Vue({
  el: '#content',   
})

const nav = new Vue({
  el: '#nav',   
})

const sheet_content = new Vue({
  el: '#sheet-content',   
})
