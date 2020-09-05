import ListEventComponent from './components/ListEventComponent.vue'
import CreateEventComponent from './components/CreateEventComponent.vue'
import ShowEventComponent from './components/ShowEventComponent.vue'
// import VueRouter from 'vue-router'
// Vue.use(VueRouter)


export default {
    mode: 'history',
    linkActiveClass: 'active',
    routes: [

        {
            path: '/',
            component: ListEventComponent,
            name: 'event-list'
        },
        {
            path: '/event/create',
            component: CreateEventComponent,
            name: 'event-create',
        },
        {
            path: '/event/:id',
            component: ShowEventComponent,
            name: 'event-show',
            props: true
        },

    ]
}