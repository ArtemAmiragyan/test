<template>
    <div>
        <ul class="list-group mt-3">
            <li class="list-group-item" v-for="paginated in paginatedData">
                {{paginated.name}}
                {{paginated.title}}
            </li>
        </ul>
        <button class="btn btn-default mt-3" :disabled="pageNumber === 0" @click="prevPage">
            Previous
        </button>
        <button class="btn btn-default mt-3" :disabled="pageNumber >= pageCount -1" @click="nextPage">
            Next
        </button>
    </div>
</template>

<script>
    export default {
        name: "pagination",
        data() {
            return {
                pageNumber: 0
            }
        },

        props: {
            listData: {
                type: Array,
                required: true
            },

            size: {
                type: Number,
                required: false,
                default: 10
            }
        },
        methods: {
            nextPage() {
                this.pageNumber++;
            },

            prevPage() {
                this.pageNumber--;
            }
        },
        computed: {
            pageCount() {
                return Math.ceil(this.listData.length / this.size);
            },

            paginatedData() {
                const start = this.pageNumber * this.size,
                    end = start + this.size;
                return this.listData.slice(start, end);
            }
        }
    }
</script>

<style scoped>

</style>
