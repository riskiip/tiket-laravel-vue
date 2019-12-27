<template>
  <v-toolbar color="cyan" dark >
    <v-spacer></v-spacer>
              <div class="hidden-sm-and-down">
                    <router-link
                    v-for="item in items"
                    :key="item.title"
                    :to="item.to">
                      <v-btn flat>{{item.title}}</v-btn>
                    </router-link>
  </div>
</v-toolbar>
</template>
<script>
export default {
  data() {
    return {
      items: [
        { title: "Kategori", to: "/categori", component:'./categori/CategoriComponent'},
        { title: "Tiket",    to: "/", component:'./tiket/TiketComponent'},
        { title: "Transaksi",    to: "/", component:'./transaksi/TransaksiComponent'},
      ]
    }
  },
    created(){

  }
}
</script>

<style>

</style>
