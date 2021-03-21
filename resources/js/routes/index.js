import Homepage from '../pages/Homepage.vue'
import About from '../pages/About.vue'
import BookingHistory from '../pages/BookingHistory.vue'
import LogOut from '../pages/LogOut.vue'

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Homepage,
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },
        {
            path: '/bookinghistory',
            name: 'history',
            component: BookingHistory,
        },
        {
            path: '/logout',
            name: 'logout',
            component: LogOut,
        },
    ]
}
