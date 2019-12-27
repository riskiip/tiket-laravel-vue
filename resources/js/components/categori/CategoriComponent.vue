<template>
    <v-card>
        <router-link to="/categori/create" class="btn btn-primary btn-sm float-right"> + Tambah Kategori</router-link>
  <v-card-title>
      Data Kategori
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
              :items="categories"
              :search="search"
          > 
              <template slot="items" slot-scope="categories">
                  <td>{{ categories.item.name_categori }}</td>
                  <td>
                    <router-link :to="{name :'edit_categori', params:{id:categories.item.id}}">
                      <v-icon color="orange">edit</v-icon>
                    </router-link>
                    <v-btn icon small @click="destroy(categories.item.id)">
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
      mounted(){
        this.getCategory()
      },
      data () {
        return {
          search: '',
          headers: [
            { text: 'Nama Kategori', value: 'name_categori' },
            { text: 'Aksi', value: '' },
          ],
          categories:[]
        }
      },
      methods:{
        getCategory(){
          axios("/api/categori")
          .then(res=>this.categories=res.data.data)
          .catch(res=>this.console.log(error.res.data.data))
        },
        destroy(id){
          let keputusan = confirm('Apakah Anda yakin ingin menghapus?')
          if(keputusan == true){
            axios.delete(`/api/categori/${id}+`)
            this.getCategory()
          }
          
        }
      }
    }
  </script>

  <style type="text/css">
    .card-header {
       background-color:  #e86464;
     }
</style>