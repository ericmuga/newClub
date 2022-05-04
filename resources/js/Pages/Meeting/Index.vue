<template>
    <div>
          <div class="flex justify-between w-full">
              <DatePicker :model="`meetings`" :sd="filters.startDate" :ed="filters.endDate" :tp="filters.type" />

          </div>
          <div class="col-span-4 -mt-6 text-center">
                    <Pagination v-if="meetings.data.length!=0" :links=meetings.links :prefix="`meetings`"/>
                    <div v-else class="col-span-4 py-6 mt-6 text-center">No Meetings were found</div>
            </div>
            <div class="flex justify-center w-full">
               <Link
                 :href="route('meetings.create')"
               >
                <Button
                  type="button"
                  icon='pi pi-plus'
                  class="p-button-warning"

                />
               </Link>



            </div>
           <transition
                appear

                @before-enter="beforeEnter"
                @enter="enter"
            >

            <div class="grid grid-cols-5" >
                <div class="col-span-1 gap-2 mt-5" v-for="meeting in meetings.data" :key="meeting.identifier">
                    <MeetingCard :meeting="meeting" class="mx-1"/>
                </div>

            </div>

           </transition>
           <div class="col-span-4 -mt-6 text-center">
                    <Pagination v-if="meetings.data.length!=0" :links=meetings.links :prefix="`meetings`"/>
            </div>
    </div>
</template>
<script setup>

    import { ref, reactive, watch } from 'vue';
    import Pagination from '@/components/Pagination'
    import MeetingCard from '@/components/MeetingCard'
   import SearchBox from '@/components/SearchBox'
   import { useForm } from '@inertiajs/inertia-vue3'
   import debounce from 'lodash/debounce'

   import gsap from 'gsap';
//    import 'flowbite';
import DatePicker from '@/components/DatePicker.vue';

    // const form = useForm({
    //                         member_list: null,
    //                         })
   const props=defineProps({ meetings:Object,
                             model:String,
                             search:String,
                             filters:Object,
                          });
// const filters=ref({''})
//    const uploadMembers=()=>{
//         form.post(route('members.upload'))
//    }

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

    const form=useForm({type:''});
    const changeMeeting=()=>{form.get('meetings.index')}
    // const debounce=debounce;
    // const form=useForm({type:''});



</script>
<style lang="scss" scoped>

</style>
