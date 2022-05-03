<template>
    <div>
        <div class="col-span-4 -mt-6 text-center">
                    <Pagination :links=members.links :prefix="`/members/list`" />
            </div>

            <div class="col-span-4 ">


                <div class="flex flex-row justify-center my-3 text-center">
                    <SearchBox :model="`members.list`" />
                </div>

                <div class="flex flex-row justify-start text-center">
                    <Form @submit.prevent="uploadMembers" class="flex flex-row ">
                        <FileUpload mode="basic"
                                name="demo[]"
                                url="./upload.php"
                                :maxFileSize="1000000"
                                chooseLabel="Upload List"
                                @input="form.member_list = $event.target.files[0]"
                                data-tooltip-target="tooltip-default"
                                class="mr-2"
                                />
                          <Button v-if="form.member_list" :disabled=form.progress type="submit"  icon="pi pi-upload" class="mx-2 p-button-rounded p-button-secondary"/>
                    </Form>
                    <a href="members/export">
                        <Button
                            label="Download List"
                            type="button"
                            icon="pi pi-download"
                            class="p-button-success icon-left"
                            >
                      </Button>
                    </a>





            <!-- s<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Default tooltip</button> -->
            <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
               <p>Include a header row, then arrange your columns this way:
                   </p>
                   <p>
                       name, email, phone_number, rotary_number, nationality,field_id, gender
                   </p>
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <Link
               :href="route('members.create')"
             >

                 <Button type="button" label="Add Member" icon="pi pi-user-plus" class="p-button-warning"/>
            </Link>

             <Link
                     :href="route('members.index')"
                    >
                    <Button
                      label="Card View"
                      type="button"
                      icon="pi pi-book"
                      class="p-button-secondary icon-left"
                    >

                    </Button>
                    </Link>

            </div>
            </div>

        <section class="mt-3 ">

               <transition
                appear

                @before-enter="beforeEnter"
                @enter="enter"
            >
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                     <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all" class="sr-only">checkbox</label>
                            </div>
                         </th>
                         <th></th>
                        <th scope="col" class="px-6 py-3">
                             Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                                email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Field
                        </th>
                        <th scope="col" class="px-6 py-3">
                            RI Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Controls</span>
                        </th>
                    </tr>
            </thead>
            <tbody>
            <tr
               v-for="member in members.data" :key="member.id"
              class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="w-4 p-4">
            <div class="flex items-center">
            <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checkbox-table-1" class="sr-only">checkbox</label>
            </div>
            </td>
            <th>

                <img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500"
                      :src="member.gravatar"
                      alt="Bordered avatar">

            </th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
             {{member.name}}
            </th>
            <td class="px-6 py-4">
            {{member.email}}
            </td>
            <td class="px-6 py-4">
            {{member.field}}
            </td>
            <td class="px-6 py-4">
            {{member.rotary_number}}
            </td>
            <td class="px-6 py-4 text-right">
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
            </tr>
            </tbody>
            </table>
            </div>
        </transition>


        </section>
        <div class="col-span-4 -mt-6 text-center">
                    <Pagination :links=members.links :prefix="`/members/list/`" />
            </div>
    </div>
</template>
<script setup>

    import { ref, reactive } from 'vue';
    import Pagination from '@/components/Pagination'
    import MemberCard from '@/components/MemberCard'
   import SearchBox from '@/components/SearchBox'
   import { useForm } from '@inertiajs/inertia-vue3'
   import gsap from 'gsap';
   import 'flowbite';

    const form = useForm({
                            member_list: null,
                            })
   const props=defineProps({ members:Object,
                             model:String,
                             search:String,


                            })
   const uploadMembers=()=>{
        form.post(route('members.upload'))
   }

 const beforeEnter=(el)=>{
            //    console.log('set the initial state')
             el.style.opacity=0;
             el.style.transform='translateY(-40px)'
        }

        const enter =(el)=>{
            // console.log('starting to enter into the dom')
                gsap.to(el,{
                    opacity:1,
                    y:0,
                    duration:0.8,
                            // onComplete:done
            })

            return{
                enter,beforeEnter
            }
        }
</script>

<style lang="scss" scoped>

</style>
