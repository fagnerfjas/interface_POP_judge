<template>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Submeter resposta
                        <span class="code-block pull-right" id="time" v-html="time"></span>
                    </div>

                    <div class="panel-body">
                        O que é Lorem Ipsum?
                        Lorem Ipsum é simplesmente uma simulação de texto da indústria
                        tipográfica e de impressos, e vem sendo utilizado desde o século XVI,
                        quando um impressor desconhecido pegou uma bandeja de tipos
                        e os embaralhou para fazer um livro de modelos de tipos.
                        Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto
                        para a editoração eletrônica, permanecendo essencialmente inalterado.
                        Se popularizou na década de 60, quando a Letraset lançou decalques
                        contendo passagens de Lorem Ipsum, e mais recentemente quando passou
                        a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.

                        <form>
                            <div class="form-group">
                                <div>
                                    <label for="lang">Linguagem</label>
                                    <select id="lang" class="form-control">

                                        <option value="lang_id"> Java </option>

                                    </select>
                                </div>
                                <label for="file">Enviar arquivo .zip</label>
                                <input type="file" class="form-control-file" id="file">
                            </div>
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
                state: "started",
                startTime: Date.now(),
                currentTime: Date.now(),
                interval: null
            }
        },

        mounted: function() {
            this.interval = setInterval(this.updateCurrentTime, 1000);
        },
        destroyed: function() {
            clearInterval(this.interval)
        },


        computed: {
            time: function() {
                return this.hours + ':' + this.minutes + ':' + this.seconds;
            },
            milliseconds: function() {
                return this.currentTime - this.$data.startTime;
            },
            hours: function() {
                var lapsed = this.milliseconds;
                var hrs = Math.floor((lapsed / 1000 / 60 / 60));
                return hrs >= 10 ? hrs : '0' + hrs;
            },
            minutes: function() {
                var lapsed = this.milliseconds;
                var min = Math.floor((lapsed / 1000 / 60) % 60);
                return min >= 10 ? min : '0' + min;
            },
            seconds: function() {
                var lapsed = this.milliseconds;
                var sec = Math.ceil((lapsed / 1000) % 60);
                return sec >= 10 ? sec : '0' + sec;
            }
        },

        methods: {
            reset: function() {
                this.$data.state = "started";
                this.$data.startTime = Date.now();
                this.$data.currentTime = Date.now();
            },
            pause: function() {
                this.$data.state = "paused";
            },
            resume: function() {
                this.$data.state = "started";
            },
            updateCurrentTime: function() {
                if (this.$data.state == "started") {
                    this.currentTime = Date.now();
                }
            }
        }
    }
</script>
