<template>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ranking Geral</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th width="10%">Posição </th>
                                <th>Nome</th>
                                <th>Pontos</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="pessoa in ranking">
                                <td>{{pessoa.posicao}}º </td>
                                <td>{{pessoa.nome}}</td>
                                <td><code>{{pessoa.pontos}}</code></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                ranking: []
            }
        },

        mounted() {
            this.ranking = Vue.http.get('/api/ranking').then(response => {
                this.ranking = response.body;
            }, response => {

            });
            console.log(this.ranking)
        }
    }
</script>
