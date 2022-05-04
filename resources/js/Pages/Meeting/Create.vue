<template>
    <div>
          <transition
          appear

          @before-enter="beforeEnter"
          @enter="enter"
        >

        <div class="flex flex-col items-center w-full">
            <div class="p-4 border-t-2 border-b-2 rounded-sm shadow-sm border-slate-300">
              <div class="w-full p-4 tracking-wide text-center text-white uppercase rounded-md bg-slate-500">
              Meeting Card
          </div>

            <form action="" @submit.prevent="createMeeting" class="flex flex-col my-3 ">

               <div class="w-full my-3">
                    <label for="date" class="text-sm">
                       <span >
                          Meeting Date
                        </span>
                    </label>
                    <InputText
                        type="date"
                        v-model="form.date"
                         placeholder="Meeting Date"
                    />
                   </div>

                   <div class="w-full my-3 ">
                    <label for="date" class="text-sm">
                       <span >
                          Meeting Time
                        </span>
                    </label>
                    <InputText
                        type="time"
                        v-model="form.time"
                         placeholder="Meeting Time"
                    />
                   </div>

              <div class="w-full my-3 text-center">

                        <InputText
                        placeholder="Topic"
                        type="text"

                        v-model="form.topic"
                        />
              </div>

              <div class="w-full my-3 text-center">
                  <InputText
                    placeholder="Guest Speaker"
                    type="text"
                    class="my-3"
                    v-model="form.guest_speaker"
                    />
              </div>

              <div class="w-full my-3 text-center">
                   <InputText
                    placeholder="Venue"
                    type="text"
                    class="my-3"
                    v-model="form.venue"
                    />
              </div>

                 <TextArea
                    placeholder="Description"

                    class="my-1 border-2 border-slate-300"
                    v-model="form.description"
                    />


            <div class="w-full my-3 text-center">
                <Dropdown
                    filter="true"
                    optionLabel="name"
                    optionValue="code"
                    v-model="form.type"
                    :options="[
                                {name:'Physical Meeting',code:'PM' },
                                {name:'Make Up',code:'MU'},
                                {name:'Zoom Meeting',code:'ZM'}
                                ]"
                    />
            </div>
             <div class="w-full text-center">
                <Button
                type="submit"
                :disabled=form.progress
                label="Create"
                icon="pi pi-check"
                iconPos="left"
                >

             </Button>
             </div>


            </form>
            </div>
        </div>
          </transition>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3"
import {gsap} from 'gsap'

  const form= useForm({
                       date:null,
                       topic:'',
                       guest_speaker:'',
                       start_time:null,
                       venue:'',
                       type:'',
                       description:''

                     })
  const createMeeting=()=>{

         form.post(route('meetings.store'))
  }

  const beforeEnter=(el)=>{
            //    console.log('set the initial state')
             el.style.opacity=0;
             el.style.transform='translateY(-80px)'
        }

        const enter =(el)=>{
            // console.log('starting to enter into the dom')
                gsap.to(el,{
                    opacity:1,
                    y:0,
                    duration:0.8,
                            // onComplete:done
            })
        }
</script>

<style lang="scss" scoped>

</style>
