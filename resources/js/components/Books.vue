<template>
    <div class="container">
        <pagination :listData="books"/>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "Books",
        data() {
            return {
                books: [],
            }
        },
        created() {
            axios.get('api/books')
                .then((response) => {
                    this.books = response.data;
                })
                .catch((error) => {
                    return alert(error)
                })
        }
    }
</script>
