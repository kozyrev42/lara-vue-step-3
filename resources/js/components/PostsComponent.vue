<template>
    <div class="posts">
        <h1>PostsComponent +++</h1>

        <button @click="sayHello">sayHello</button>
        <PostComponent/>
    </div>
</template>

<style scoped>
    .posts {
        background-color: #a3ed57;
        height: 400px;
        margin: 40px;
    }
</style>

<script>
    import PostComponent from "./PostComponent";

    export default {
        name: "PostsComponent",

        mounted() {
            console.log('Component mounted.')
        },

        components: {
            PostComponent
        },

        data() {
            return {

            }
        },

        methods: {
            sayHello() {
                console.log('Привет из PostsComponent')
            }
        }
    }
</script>
