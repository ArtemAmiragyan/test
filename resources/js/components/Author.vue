<template>
    <ul class="list-group mt-3">
        <li class="list-group-item">{{author.name}}</li>
    </ul>
</template>

<script>
    export default {
        name: "Author",
        props: ['author']
    }
</script>

