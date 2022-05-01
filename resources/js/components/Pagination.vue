<template>
    <div>
        <!--pagination -->
        <div class="p-3 mt-6 text-black">
            <Link     v-for="link in links" :key=link.url
                      v-html="link.label"
                      :href="`${resource}/${link.url}`"
                      :class="{'text-slate-500 hover:bg-none':!link.url,'font-bold underline':link.active}"
                      preserveScroll
                      class="p-2 border-2 border-white border-sm hover:bg-slate-200 hover:font-bold"
                      >
            </Link>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        links:Object,
        resource:String,
    },
   setup(props){

    //    const resource= props.resource.value
    //    const appendURL=(link)=>(`${resource}/${link}`)

        return {
            //   appendURL
        };
    },

};
</script>

<style lang="scss" scoped>

</style>
