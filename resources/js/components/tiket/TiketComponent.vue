<template>
    <v-card>
        <router-link to="/tiket/create" class="btn btn-primary btn-sm float-right"> + Tambah Tiket</router-link>
  <v-card-title>
      Data Tiket
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        append-icon="search"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
    </v-card-title>
    <v-data-table
      :headers="headers"
      :items="tiket"
      :search="search"
    >
      <template slot="items" slot-scope="tiket">
        <td>{{ tiket.item.name_tiket }}</td>
        <td>{{ tiket.item.harga_tiket }}</td>
        <td>{{ tiket.item.name_kategori }}</td> 
        <td>{{ tiket.item.jumlah_tiket }}</td>
        <td>
          <router-link :to="{name:'edit_tiket', params:{id:tiket.item.id}}">
                <v-icon color="orange">edit</v-icon>
          </router-link>
            <v-btn icon small @click="destroy(tiket.item.id)">
                    <v-icon color="red">delete</v-icon>
            </v-btn>
          </td>
      </template>
      <v-alert slot="no-results" :value="true" color="red" icon="warning">
        Your search for "{{ search }}" found no results.
      </v-alert>
    </v-data-table>
  </v-card>
</template>

<script>
export default {
     data () {
      return {
        search: '',
        headers: [
          { text: 'Nama Tiket', value: 'name_tiket' },
          { text: 'Harga Tiket', value: 'harga_tiket' },
          { text: 'Nama Kategori', value: 'name_kategori' },
          { text: 'Jumlah Tiket', value: 'jumlah_tiket' },
          { text: 'Aksi', value: 'jumlah_tiket' },
        ],
        tiket: [ ]
      }
    },
    created(){
        this.getTiket()
    },
    methods:{
      destroy(id){
        let decision = confirm('Anda yakin ingin menghapus ?')
        if(decision===true){
          axios.delete(`/api/tiket/${id}`)
          this.getTiket()
        }
      },
      getTiket(){
        axios("/api/tiket")
        .then(res=>this.tiket=res.data.data)
      },
    }
}
</script>

<style type="text/css">
    .card-header {
       background-color:  #e86464;
     }
</style>