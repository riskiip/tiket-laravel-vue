import Vue from 'vue'
import VueRouter from 'vue-router'

//Kita atur komponen untuk Kategori, mulai dari 
//Kategori itu sendiri, Tambah, Edit dan Hapus
import CategoriComponent from '../components/categori/CategoriComponent.vue'
import CreateCategori from '../components/categori/CreateCategori.vue'
import EditCategori from '../components/categori/EditCategori.vue'

//Kita atur untuk Komponen Tiket
import TiketComponent from '../components/tiket/TiketComponent.vue'
import CreateTiket from '../components/tiket/CreateTiket.vue'
import EditTiket from '../components/tiket/EditTiket.vue'

//Kita atur untuk komponen transaksi
import TransaksiComponent from '../components/transaksi/TransaksiComponent.vue'

import ExampleComponent from '../components/ExampleComponent.vue'

const routes = [
    { name: 'categori',         path: '/categori',          component: CategoriComponent },
    { name: 'create_categori',  path: '/categori/create',   component: CreateCategori },
    { name: 'edit_categori',    path: '/categori/edit/:id', component: EditCategori },

    { name: 'tiket',            path: '/tiket',             component: TiketComponent },
    { name: 'create_tiket',     path: '/tiket/create',      component: CreateTiket },
    { name: 'edit_tiket',       path: '/tiket/edit/:id',    component: EditTiket },

    { name: 'transaksi',        path: '/transaksi',         component: TransaksiComponent },

    { name: 'home1',        path: '/',         component: ExampleComponent },
    { name: 'home2',        path: '/home',         component: ExampleComponent },
  ]

Vue.use(VueRouter)

const router = new VueRouter
(
    {
        routes,
        hasbang:false,
        mode:'history'
    }
)

export default router