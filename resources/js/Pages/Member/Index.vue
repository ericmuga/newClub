<template>

    <div class="grid items-center w-full grid-cols-4 gap-3 px-3 mx-3 mt-5" >
        <!-- <div  v-if="members.data.length>0"> -->
            <div class="col-span-4 -mt-6 text-center">
                    <Pagination :links=members.links :resource=model />
            </div>

            <div class="col-span-4 ">


                <div class="flex flex-row justify-center text-center">
                    <SearchBox :model=model />
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

                 <Button type="button" label="Add Member" icon="pi pi-users" class="p-button-warning"/>
            </Link>

</div>
            </div>

            <div class="col-span-1" v-for="member in members.data" :key="member.id">
                 <transition
                appear

                @before-enter="beforeEnter"
                @enter="enter"
            >
                <MemberCard :member=member />
                 </transition>
            </div>
            <div class="col-span-4">
              <Pagination :links=members.links :resource=model />
            </div>

        <div class="w-full text-center">
            <div v-if="members.data.length===0">
           No members were found
        </div>
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
             el.style.transform='translateX(-40px)'
        }

        const enter =(el)=>{
            // console.log('starting to enter into the dom')
                gsap.to(el,{
                    opacity:1,
                    x:0,
                    duration:0.8,
                            // onComplete:done
            })
        }
</script>

<style lang="scss" scoped>

</style>
