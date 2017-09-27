<template>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de submissões</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Problema </th>
                                <th>Pontuação</th>
                                <th>data</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="submissao in submissoes">
                                <td>{{submissao.id_user}}</td>
                                <td><code>{{submissao.file_name}}</code></td>
                                <td>{{submissao.time_submission}}</td>
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
                submissoes: []
            }
        },

        mounted() {
            this.submissoes = Vue.http.get('/api/submissoes').then(response => {
                    this.submissoes = response.body;
                }, response => {

                });
            console.log(this.submissoes)
        }
    }
</script>
