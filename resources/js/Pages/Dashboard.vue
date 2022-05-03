<template>
    <div class="grid min-h-screen px-3 mx-2 place-items-center">
        <!--This will be the initial section of the dashboard -->
        <transition
          appear

          @before-enter="beforeEnter"
          @enter="enter"
        >

        <section class="grid gap-2 md:grid-cols-2 sm:grid-cols-1">
            <div class="col-span-1 rounded-lg shadow-md border-slate-200 card hover:shadow shadow-slate-400 hover:border-2">
               <Card style="width: 25em">

                    <template #title >
                      <div class="text-center text-slate-600">
                          Members
                         <UsersIcon class="w-5 h-5 text-center text-slate-600"/>
                      </div>
                    </template>
                    <template #subtitle>
                        Member Details
                    </template>
                    <template #content>
                      Registered Members
                     </template>
                    <template #footer>
                        <div class="text-center">
                            <Link
                              :href="route('members.index')"
                            >
                               <Button icon="pi pi-book" label="Explore"  />
                            </Link>


                        </div>
                    </template>
                </Card>
            </div>
            <div class="col-span-1 border-blue-200 rounded-lg shadow-md card hover:shadow shadow-blue-400 hover:border-2">
               <Card style="width: 25em">

                    <template #title >
                      <div class="text-center text-blue-500">
                          Meetings
                      <CollectionIcon class="w-5 h-5 text-center text-blue-500"/>
                      </div>
                    </template>
                    <template #subtitle>
                          Meeting Details
                    </template>
                    <template #content>
                      Meetings
                     </template>
                      <template #footer>
                        <div class="text-center">
                            <Link
                              :href="route('meetings.index')"
                            >
                               <Button icon="pi pi-book" label="Explore"  />
                            </Link>


                        </div>
                    </template>

                </Card>
            </div>
            <div class="col-span-1 border-teal-200 rounded-lg shadow-md card hover:shadow shadow-slate-400 hover:border-2">
                <Card style="width: 25em" >

                    <template #title >
                      <div class="text-center text-teal-600">
                          Guests
                         <UsersIcon class="w-5 h-5 text-center text-teal-600"/>
                      </div>
                    </template>
                    <template #subtitle>
                        Guests Details
                    </template>
                    <template #content>
                     Some More details..
                     </template>
                    <template #footer>
                        <div class="text-center">
                            <Link
                              href="#"
                            >
                               <Button icon="pi pi-book" label="Explore"  />
                            </Link>


                        </div>
                    </template>
                </Card>
            </div>
            <div class="col-span-1 rounded-lg shadow-md border-amber-200 card hover:shadow shadow-amber-400 hover:border-2">
                <Card style="width: 25em">

                    <template #title >
                      <div class="text-center text-amber-700">
                         Settings
                        <CogIcon class="w-5 h-5 text-amber-700"/>
                      </div>
                    </template>
                    <template #subtitle>
                         Settings
                    </template>
                    <template #content>
                      Settings
                     </template>

                      <template #footer>
                        <div class="text-center">
                            <Link
                              href="#"
                            >
                               <Button icon="pi pi-book" label="Explore"  />
                            </Link>


                        </div>
                    </template>

                </Card>
            </div>


        </section>
        </transition>
    </div>
</template>

<script>
    import { ref, reactive } from 'vue';
    import { UsersIcon,CollectionIcon,CogIcon } from '@heroicons/vue/solid'

    import gsap from 'gsap'
    // import Layout from '@/Layouts/Admin'
    export default {
        // layout:layout,
components: { UsersIcon,CollectionIcon,CogIcon },
        setup(props, context) {
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
        }
        return{ beforeEnter,enter

           }
        }
    }
</script>

<style  scoped>
/* .card{
    background-color:
    opacity: 0.9;
    box-shadow: 2em;

} */
</style>
