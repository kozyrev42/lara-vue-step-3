<template>
    <div class="post">
        <h1>PostComponent</h1>
    </div>
</template>

<style>
    .post {
        background-color: #a3ed57;
        height: 100px;
        margin: 40px;
    }
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
