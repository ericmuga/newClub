
        <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<template>
  <div>
    <div class="md:grid md:grid-cols-3 md:gap-6">

      <div class="mt-5 shadow md:mt-0 md:col-span-2 shadow-slate-200">

      </div>
    </div>
  </div>

  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200" />
    </div>
  </div>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
          <!-- <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p> -->
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-6">
        <form action="#" @submit.prevent="createMember()">
          <div class="overflow-hidden shadow sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="Your Name" class="block text-sm font-medium text-gray-700">Your Name</label>
                  <InputText
                     type="text"
                     name="name"
                     id="name"
                      autocomplete="name"
                      class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                      v-model="form.name"
                      />
                <div v-if="errors.name" class="text-xs text-red">{{errors.name}}</div>
                </div>




                <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Email Address</label>
                  <InputText
                            type="email"
                             name="email-address"
                             id="email-address"
                             autocomplete="email"
                             class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                             v-model="form.email"
                    />
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Rotary Number</label>
                  <InputText
                            type="text"
                             name="rotary_number"
                             id="rotary_number"
                             autocomplete="rotary_number"
                             class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                             v-model="form.rotary_number"
                    />
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Phone Number</label>
                  <InputText
                            type="text"
                             name="phone-number"
                             id="phone-number"
                             autocomplete="phone"
                             class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                             v-model="form.phone"
                    />
                </div>
                    <br/>
                <div class="col-span-6 sm:col-span-3">
                  <label for="country" class="block text-sm font-medium text-gray-700">Nationality</label>
                  <Dropdown
                          v-model="form.country"
                          :options="countries"
                          optionLabel="name"
                          optionValue="code"
                          placeholder="Your Country"
                          />


                <label for="Field" class="block text-sm font-medium text-gray-700">Field</label>
                  <Dropdown
                          v-model="form.field_id"
                          :options="fields"
                          optionLabel="name"
                          optionValue="id"
                          placeholder="Field (Expertise)"
                          />


                 <label for="Field" class="block text-sm font-medium text-gray-700">Gender</label>
                  <Dropdown
                          v-model="form.gender"
                          :options="[{name:'Male',code:'m'},{name:'Female',code:'f'}]"
                          optionLabel="name"
                          optionValue="code"
                          placeholder="Gender"
                          />


                </div>


              </div>
            </div>
            <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
              <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200" />
    </div>
  </div>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <!-- <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
          <p class="mt-1 text-sm text-gray-600">Decide which communications you'd like to receive and how.</p>
        </div>
      </div> -->
      <div class="mt-5 md:mt-0 md:col-span-2">
        <!-- <form action="#" method="POST">
          <div class="overflow-hidden shadow sm:rounded-md">
            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
              <fieldset>
                <legend class="text-base font-medium text-gray-900">By Email</legend>
                <div class="mt-4 space-y-4">
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="comments" name="comments" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" />
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="comments" class="font-medium text-gray-700">Comments</label>
                      <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="candidates" name="candidates" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" />
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                      <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="offers" name="offers" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" />
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="offers" class="font-medium text-gray-700">Offers</label>
                      <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div>
                  <legend class="text-base font-medium text-gray-900">Push Notifications</legend>
                  <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                </div>
                <div class="mt-4 space-y-4">
                  <div class="flex items-center">
                    <input id="push-everything" name="push-notifications" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" />
                    <label for="push-everything" class="block ml-3 text-sm font-medium text-gray-700"> Everything </label>
                  </div>
                  <div class="flex items-center">
                    <input id="push-email" name="push-notifications" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" />
                    <label for="push-email" class="block ml-3 text-sm font-medium text-gray-700"> Same as email </label>
                  </div>
                  <div class="flex items-center">
                    <input id="push-nothing" name="push-notifications" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" />
                    <label for="push-nothing" class="block ml-3 text-sm font-medium text-gray-700"> No push notifications </label>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
              <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
          </div>
        </form> -->
      </div>
    </div>
  </div>
</template>


<script>
    import { ref, reactive } from 'vue';
   import{countries} from '@/assets/countries.js'
   import { useForm } from '@inertiajs/inertia-vue3'
    export default {
       props:{
                fields:Object,
                errors:Object,
       },

        setup(props, context) {
          const country= ref(countries)
          const fields=ref(props.fields)

          const form=useForm({
                            name:'',
                            email:'',
                            nationality:'',
                            field_id:'',
                            rotary_number:'',
                            phone:'',
                            club_id:'1'
                         })

         const createMember=()=>{
             form.post(route('members.store'), {
                        preserveScroll: true,
                        onSuccess: () => form.reset(),
                        })
         }

                      return {
               form,countries,fields,createMember
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
