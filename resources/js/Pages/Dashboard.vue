<template>
    <div class="grid min-h-screen px-3 mx-2 place-items-center">
        <!--This will be the initial section of the dashboard -->
        <transition
          appear

          @before-enter="beforeEnter"
          @enter="enter"
        >

        <section class="grid gap-2 md:grid-cols-2 sm:grid-cols-1">
            <div class="col-span-1 card">
               <Card style="width: 25em">

                    <template #title >
                      <div class="text-center">
                          Members
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
                              href="#"
                            >
                               <Button icon="pi pi-book" label="Explore"  />
                            </Link>


                        </div>
                    </template>
                </Card>
            </div>
            <div class="col-span-1 card">
               <Card style="width: 25em">

                    <template #title >
                      <div class="text-center">
                          Meetings
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
                              href="#"
                            >
                               <Button icon="pi pi-book" label="Explore"  />
                            </Link>


                        </div>
                    </template>

                </Card>
            </div>
            <div class="col-span-1 card">
                <Card style="width: 25em">

                    <template #title >
                      <div class="text-center">
                          Makeups
                      </div>
                    </template>
                    <template #subtitle>
                          Makeup Details
                    </template>
                    <template #content>
                      Makeups
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
            <div class="col-span-1 card">
                <Card style="width: 25em">

                    <template #title >
                      <div class="text-center">
                         Settings
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
    // import gsap from 'gsap'
    // import Layout from '@/Layouts/Admin'
    export default {
        // layout:layout,

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
