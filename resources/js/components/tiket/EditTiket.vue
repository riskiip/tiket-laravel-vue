<template>
       <div class="container">
   <v-form @submit.prevent="updatetiket">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Update Tiket</div>
                      <div class="card-body">
                          <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><i class="fas fa-space-shuttle"> Nama Tiket </i></label>

                                 <div class="col-md-6">
                                       <input type="text" v-model="form.name_tiket" class="form-control">
                                 </div>
                           </div>


                      <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"><i class="fas fa-address-book">Kategori Tiket</i></label>
                            <div class="col-md-6">
                                    <select class="form-control" v-model="form.id_kategori">
                                         <option :value="form.id_categori">
                                             {{form.name_categori}}
                                         </option>
                                         <option v-for="categories in categori" :value="categories.id">
                                             {{categories.name_categori}}
                                         </option>
                                         
                                    </select>
                            </div>
                        </div>

                          <div class="form-group row">
                                 <label class="col-md-2 col-form-label text-md-right"><i class="far fa-flag"> Jumlah </i></label>
                                 <div class="col-md-6">
                                        <input type="number" v-model="form.jumlah_tiket" class="form-control">
                                 </div>
                           </div>

                            <div class="form-group row">
                                 <label class="col-md-2 col-form-label text-md-right"><i class="far fa-flag"> Jenis Tiket </i></label>
                                 <div class="col-md-6">
                                        <input type="text" v-model="form.jenis_tiket" class="form-control">
                                 </div>
                            </div>

                           

                          <div class="form-group row">
                                <label class="col-md-2 col-form-label text-md-right"><i class="fas fa-money-bill-alt"> Harga </i></label>
                                 <div class="col-md-6">
                                     <input type="number"  v-model="form.harga_tiket" class="form-control">
                                 </div>
                           </div>

                               <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-primary btn-sm">Simpan perubahan</button>
                                       <router-link to="/tiket" class="btn btn-danger btn-sm">Batal</router-link>
                                    </div>
                            </div>
                      </div>
                  </div>
            </div>
        </div>
    </v-form>
</div>
</template>
<script>
export default {
    data(){
        return{
            form:{},
            categori:{}
        }   
    },
    created(){
        axios.get(`/api/tiket/${this.$route.params.id}`)
        .then(res=>this.form=res.data.data)
            
    },
    mounted(){
        axios.get("/api/categori")
        .then(res=>this.categori=res.data.data)
    },
    methods:{
        updatetiket(){
            axios.put(`/api/tiket/${this.$route.params.id}`, this.form)
            .then((response)=>{
                this.$router.push({name:'tiket'})
            })
        }
    }  
}
</script>
<style type="text/css">
    .card-header {
       background-color:  #e86464;
     }
</style>