<template>
       <div class="card">
            <div class="card-header">Formulário de Contato</div>

                <div class="card-body">
                    <form @submit.prevent="salvar()" @keydown="form.onKeydown($event)">
                            <div class="form-group">
                            <label>Nome</label>
                            <input v-model="form.nome" type="text" name="nome"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('nome') }">
                            <has-error :form="form" field="nome"></has-error>
                            </div>

                            <div class="form-group">
                            <label>Telefone</label>
                            <input v-model="form.telefone" type="text" name="telefone"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('telefone') }">
                            <has-error :form="form" field="telefone"></has-error>
                            </div>

                            <button :disabled="form.busy" type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                    <hr>

                    <table-contato :contatos="listarContatos"/>
                </div>
        </div>
</template>

<script>

import { Form } from 'vform'
import TableContato from './TableContato'

export default {
    components:{
           TableContato
    },

    data(){
        
        return{
            listarContatos: [],
            form: new Form({
             nome: '',
            telefone: '',      
       
          })
        }
    },
    mounted(){
              axios.get('/contato')
             .then(({data}) =>{
              this.listarContatos = data
       })
       .catch(error=>{
                 this.$swal({
                 icon: 'error',
                 title: 'Erro ao listar contatos'
                })
       })
    },
    methods:{
        salvar(){
            this.form.post('/contato')
                 .then(({ data }) => { 
                    this.listarContatos.push(data)
                        this.$swal({
                            icon: 'success',
                            title: 'Contato Salvo com sucesso'
                                  })
                 })
                 .catch(error=>{
                    this.$swal({
                         icon: 'error',
                         title: 'Erro ao salvar contato'
                         
                            })
                        })
             }
       }
 }
</script>