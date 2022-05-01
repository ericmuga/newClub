<template>
    <div>
        <div class="max-w-2xl mx-4 mt-4 text-gray-900 bg-white rounded-lg shadow-xl sm:max-w-sm md:max-w-sm lg:max-w-sm xl:max-w-sm sm:mx-auto md:mx-auto lg:mx-auto xl:mx-auto">
            <div class="h-24 overflow-hidden rounded-t-lg">
                <img class="object-cover object-top w-full"
                     src='https://images.unsplash.com/photo-1549880338-65ddcdfd017b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='Mountain'>
            </div>
            <div class="relative w-32 h-32 mx-auto -mt-16 overflow-hidden border-4 border-white rounded-full">
                <!-- <img class="object-cover object-center h-32" src='https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt='Woman looking front'> -->
                <img class="object-cover object-center h-32" :src=member.gravatar alt='Woman looking front'>
            </div>
            <div class="mt-2 text-center">
                <h2 class="font-semibold">{{member.name}}</h2>
                <p class="text-gray-500">{{member.field}}</p>
                <p class="text-gray-500">{{member.rotary_number}}</p>
            </div>
            <ul class="flex items-center justify-around py-4 mt-2 text-gray-700">
                <li class="flex flex-col items-center justify-around">
                <!-- <svg class="w-4 text-blue-900 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                </svg> -->
                <DocumentReportIcon/>
                <div>2k</div>
                </li>
                <li class="flex flex-col items-center justify-between">
                <svg class="w-4 text-blue-900 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z"/>
                </svg>
                <div>10k</div>
                </li>
                <li class="flex flex-col items-center justify-around">
                <svg class="w-4 text-blue-900 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/>
                </svg>
                <div>15</div>
                </li>
            </ul>
        <div class="flex justify-center p-4 mx-8 mt-2 border-t">
            <!-- <button class="justify-start w-1/2 px-6 py-2 mx-2 font-semibold text-white bg-gray-900 rounded-full hover:shadow-lg">Profile</button> -->
            <!-- <Button icon="pi pi-times" class="justify-end p-button-rounded p-button-danger"
                    @click="dropMember(member.id)"
            /> -->

            <Link
              href="#"

            >
            <Button icon="pi pi-bookmark" class="mx-1 p-button-rounded p-button-warning" />
            </Link>
            <form @submit.prevent="dropMember">
                <InputText
                 hidden
                 v-model="form.id"
                ></InputText>
                <Button
                 icon="pi pi-times"
                 class="justify-end ml-3 p-button-rounded p-button-danger"
                 type="submit"
                >
                </Button>
            </form>
        </div>
    </div>
    </div>
</template>

<script>
    import { ref, reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/inertia-vue3'
import { DocumentReportIcon } from '@heroicons/vue/solid'

    export default {
        props:{
            member:Object,
        },
        components:{DocumentReportIcon},
        setup(props, context) {

            const form=useForm({
                                id:props.member.id
                             })
           const dropMember=()=>{
                    if(confirm(`Are you sure you want to delete this member?`))
                      form.post(route('members.drop'))

           }
            return {
                 dropMember,form
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
