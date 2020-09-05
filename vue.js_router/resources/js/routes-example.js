import HomeComponent from './components/HomeComponent.vue'
import AboutComponent from './components/AboutComponent.vue'
import UserComponent from './components/UserComponent.vue'
// import VueRouter from 'vue-router'
// Vue.use(VueRouter)
export default {
    mode: 'history',
    routes: [

        {
            path: '/', // our page Url
            component: HomeComponent
        },
        {
            path: '/about-us', // our page URL
            component: AboutComponent,
            name: 'about',
            alias: '/about' // 2) Redirect with alias
        },
        {
            path: '/user/:username', // Dynamic URL
            component: UserComponent,
            name: 'user',
            props: true
        },
        // 1) Redirects
        // {
        //     path: "/about",
        //     redirect: { name: "about" }
        // }
    ]
}