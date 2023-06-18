<template>
    <div class="post">
        <h5>PostComponent +</h5>
    </div>
</template>

<style scoped>
    .post {
        background-color: #e361bc;
        height: 100px;
        margin: 20px;
    }
</style>

<script>
    export default {
        name: "PostComponent",


        // mounted() - это хук жизненного цикла, который вызывается после того, как компонент был вставлен в DOM
        mounted() {
            this.getUsers();
            this.testApi();
        },


        methods: {
            getUsers() {
                axios.get('/users')

                    // .then - это обработчик успешного ответа
                    .then(data => {
                        console.log(data.data)
                    })

                    // .catch - это обработчик ошибки
                    .catch(error => {
                        console.log(error)
                    })
            },

            testApi() {
                axios.get('/api/test')

                    // .then - это обработчик успешного ответа
                    .then(response => {
                        console.log(response)
                    })

                    // .catch - это обработчик ошибки
                    .catch(error => {
                        console.log(error)
                    })
            }
        }


    }
</script>
