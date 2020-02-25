<template>
    <div>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <a class="navbar-brand" href=""> Library </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link :to="{ name: 'authors' }">Authors</router-link>
                    </li>

                    <li class="nav-item ml-4">
                        <router-link :to="{ name: 'books' }">Books</router-link>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="container">
            <router-view/>
        </div>
    </div>

</template>

<script>
    export default {
        name: "App"
    }
</script>

<style scoped>

</style>
