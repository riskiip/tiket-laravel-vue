<template>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <v-form @submit.prevent="submit">
                  <div class="card-header"><i class="fas fa-plus-circle"> Edit Katgori </i></div>
                      <div class="card-body">
                          <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right"><i class="fas fa-space-shuttle"> Nama kategori </i></label>
                                    <div class="col-md-6">
                                        <input type="text" v-model="form.name_categori" class="form-control">
                                    </div>
                            </div>
                               <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
                                    <router-link to="/categori" class="btn btn-danger btn-sm">Batal</router-link>
                                </div>
                          </div>
                      </div>
                </v-form>
                  </div>
                </div>  
            </div>
        </div>
</template>

<script>
export default {
    data(){
        return{
            form:{}
        }
    },
    created(){
        axios.get(`/api/categori/${this.$route.params.id}`)
        .then(res=>this.form=res.data.data)
    },
    methods:{
        submit(){
            axios.put(`/api/categori/${this.$route.params.id}`, this.form)
            .then((response)=>{
                this.$router.push({name:'categori'})
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