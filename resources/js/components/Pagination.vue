<template>
    <div>
        <!--pagination -->
        <div class="p-3 mt-6 text-black">
            <Link v-for="link in links" v-html="link.label" :href="link.url" :key="link.url" preserveScroll class="p-2 border-2 border-white border-sm hover:bg-slate-200 hover:font-bold" >
            </Link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'FinignitePagination',
    props:{
        links:Object,
    },

    data() {
        return {

        };
    },

    mounted() {

    },

    methods: {

    },
};
</script>

<style lang="scss" scoped>

</style>
