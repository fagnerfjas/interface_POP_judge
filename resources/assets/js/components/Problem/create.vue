<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de problemas</div>

                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Título</label>
                                <input maxlength="255" v-model="problem.titulo" id="title" type="text" class="form-control" placeholder="Digite o Título">
                            </div>
                            <div class="form-group">
                                <label for="pontuacao">Pontuação</label>
                                <input v-mask="'######'" v-model="problem.pontos" id="pontuacao" type="text" class="form-control" placeholder="Digite a Pontuação">
                            </div>
                            <div class="form-group">
                                <label for="tempo">Tempo</label>
                                <input v-mask="'##:##'" v-model="problem.tempo" id="tempo" type="text" class="form-control" placeholder="Digite o Tempoo">
                            </div>
                            <div class="form-group">
                                <label for="diretorio">Diretório</label>
                                <input v-mask="'/AAAAAAAAA'" v-model="problem.diretorio" id="diretorio" type="text" class="form-control" placeholder="Digite o nome do diretório">
                            </div>

                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea maxlength="250" v-model="problem.descricao" id="descricao" type="text" class="form-control" placeholder="Digite a descrição do problema"></textarea>
                            </div>
                            <button v-on:click="send" type="button" class="btn btn-primary">Salvar</button>
                        </form>
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
                problem: {
                    titulo: '',
                    pontos: '',
                    tempo: '',
                    diretorio: '',
                    descricao: '',
                    resposta: []
                },
            }
        },

        computed: {
            jsonForm: function(){
                return 'exemplo massa'
            }
        },

        methods: {
            send(){
                var resposta = Vue.http.post('/api/problem/create', this.problem);
                console.log(resposta)
                //this.test()
            },

            test(){
                if(this.problem.titulo != "")
                {
                    console.log(this.problem)
                }
            }
        },

        mounted() {

        }
    }
</script>
