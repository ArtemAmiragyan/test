<template>
    <div class="container">
        <pagination :list-data="authors"/>
    </div>
</template>

<script>
    import axios from 'axios';
    import Pagination from "./pagination";

    export default {
        name: "Authors",
        components: {Pagination},
        data() {
            return {
                authors: [],
            }
        },
        created() {
            axios.get('api/authors')
                .then((response) => {
                    this.authors = response.data;
                })
                .catch((error) => {
                    return alert(error)
                })
}
}
</script>
