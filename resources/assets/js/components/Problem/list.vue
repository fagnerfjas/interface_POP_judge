<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de problemas</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Título </th>
                                <th>Pontos</th>
                                <th width="60%">Descrição</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Problema 1 <br>
                                    <code><a href="/submission/create"> Enviar resposta </a></code><br>
                                    <code ><a href="/problem/ranking"> Raking </a></code>
                                </td>
                                <td>5 pt</td>
                                <td>
                                    Lorem Ipsum é simplesmente uma simulação de texto da indústria
                                    tipográfica e de impressos, e vem sendo utilizado desde o século XVI...
                                </td>
                            </tr>
                            <tr>
                                <td>Problema 2 <br>
                                    <code><a href="/submission/create "> Enviar resposta </a></code><br>
                                    <code ><a href="/problem/ranking"> Raking </a></code>
                                </td>
                                <td>10 pt</td>
                                <td>
                                    Lorem Ipsum é simplesmente uma simulação de texto da indústria
                                    tipográfica e de impressos, e vem sendo utilizado desde o século XVI, ...
                                </td>
                            </tr>
                            <tr>
                                <td>Problema 2 <br>
                                    <code><a href="/submission/create"> Enviar resposta </a></code><br>
                                    <code ><a href="/problem/ranking"> Raking </a></code>
                                </td>
                                <td>5 pt</td>
                                <td>
                                    Lorem Ipsum é simplesmente uma simulação de texto da indústria
                                    tipográfica e de impressos, e vem sendo utilizado desde o século XVI...
                                </td>
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
                problems: '',
                time: 0,
            }
        },

        mounted() {
            this.problems = Vue.http.get('/api/problem').then(response => {
                    this.problems = response.body;
                }, response => {

                });

            console.log(this.problems)

        }
    }
</script>
