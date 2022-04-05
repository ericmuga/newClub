<template>
    <div class="grid min-h-screen place-items-center">
       <div class="w-full max-w-xs">
  <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md" @submit.prevent="submit">
      <div class="w-full p-3 mb-2 font-light tracking-wide text-center text-white uppercase rounded-lg shadow-sm bg-slate-500">Club Manager</div>
    <div class="mb-4">
      <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
        Username
      </label>
      <input
      v-model="form.email"

      class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
    <p class="text-xs italic text-red-500" v-if="errors.email">{{errors.email}}</p>
    </div>
    <div class="mb-6">
      <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
        Password
      </label>
      <input
       v-model="form.password"
      class="w-full px-3 py-2 mb-3 leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
      <p class="text-xs italic text-red-500" v-if="errors.password">{{errors.password}}</p>
    </div>

    <div class="mb-6">
      <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
        Remember Me
      </label>
      <Checkbox
       v-model="form.remember"
       binary=true />
      </div>


    <div class="flex items-center justify-between">
      <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
      <a class="inline-block text-sm font-bold text-blue-500 align-baseline hover:text-blue-800" href="#">
        Forgot Password?
      </a>
    </div>


  </form>

</div>
    </div>
</template>

<script>
import { ref, reactive } from 'vue';
import { useForm } from '@inertiajs/inertia-vue3'
// import moduleName from '@/components/Footer';
    export default {
   props:{errors:Object},
   setup(props, context) {

            const form=useForm({
                                    email:null,
                                    password:null,
                                    remember:false,
                                })
            let thisYear =  new Date().getFullYear()

            //const errors=props.errors;

             function submit()
             {
               form.post(route('login.store'))
             }
            return {
                form,submit,thisYear
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
