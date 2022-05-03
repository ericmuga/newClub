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
                <!-- <DocumentReportIcon/> -->
                <img src="/images/zoom.png" class="w-6 h-4 rounded-full" alt="">
                <div>{{member.meetings.makeup}}</div>
                </li>
                <li class="flex flex-col items-center justify-between">
                <img src="/images/makeup.png" class="w-6 h-4 rounded-full" alt="">
                <div>{{member.meetings.zoom}}</div>
                </li>
                <li class="flex flex-col items-center justify-around">
                 <img src="/images/physicalmeeting.png" class="w-4 h-4 rounded-full" alt="">
                <div>{{member.meetings.physical}}</div>
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
