<template>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="c in contatos" :key="c.id">
                <td> {{ c.nome}} </td>
                <td> {{c.telefone}} </td>
                <td>----</td>
            </tr>
        
        </tbody>
    </table>
</template>

<script>
export default {
    props:[
        'contatos'
    ],
    data(){
        return{

        }
    }
}
</script>