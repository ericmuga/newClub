<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <Disclosure as="nav" class="bg-gray-800" v-slot="{ open }">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <DisclosureButton class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
            <span class="sr-only">Open main menu</span>
            <MenuIcon v-if="!open" class="block w-6 h-6" aria-hidden="true" />
            <XIcon v-else class="block w-6 h-6" aria-hidden="true" />
          </DisclosureButton>
        </div>
        <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
          <div class="flex items-center flex-shrink-0">
            <!-- <img class="block w-auto h-8 lg:hidden" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="finIgnite" />
            <img class="hidden w-auto h-8 lg:block" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="finIgnite" /> -->
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <a v-for="item in navigation" :key="item.name" :href="item.href" :class="[comp===item.component ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'px-3 py-2 rounded-md text-sm font-medium']" :aria-current="comp=item.component ? 'page' : undefined">{{ item.name }}</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <!-- <button type="button" class="p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
            <BellIcon class="w-6 h-6" aria-hidden="true" />
          </button> -->

          <!-- Profile dropdown -->
          <Menu as="div" class="relative ml-3">
        <div v-if="user">
              <MenuButton class="flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" :src=user.gravatar alt="" />
              </MenuButton>
            </div>
            <transition enter-active-class="transition duration-100 ease-out" enter-from-class="transform scale-95 opacity-0" enter-to-class="transform scale-100 opacity-100" leave-active-class="transition duration-75 ease-in" leave-from-class="transform scale-100 opacity-100" leave-to-class="transform scale-95 opacity-0">
              <MenuItems class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Your Profile</a>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Settings</a>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <Link href="/logout"
                        method="post"
                        :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']"
                  >
                    Sign out
                </Link>
                </MenuItem>
              </MenuItems>
            </transition>
          </Menu>
        </div>
      </div>
    </div>

    <DisclosurePanel class="sm:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <DisclosureButton v-for="item in navigation" :key="item.name" as="Link" :href="item.href" :class="[comp.value===item.component ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'block px-3 py-2 rounded-md text-base font-medium']" :aria-current="comp.value===item.component ? 'page' : undefined">{{ item.name }}</DisclosureButton>
      </div>
    </DisclosurePanel>
  </Disclosure>
  <!-- <transition name="toast">
    <div v-if="$page.props.flash.message!='' &&showToast"
                    class="fixed flex px-4 py-2 mt-1 text-sm font-light tracking-wide rounded-lg right-4 top-16"
                    :class="$page.props.flash.type==='success'?'bg-green-400':'bg-red-400'"
            >
                {{ $page.props.flash.message }}
    </div>
  </transition> -->

   <div class="grid w-full h-full p-5 border-2 rounded-lg shadow-lg shadow-slate-400 place-items-center">

      <slot/>

   </div>
<!--footer -->
<FooterAdmin/>
</template>

<script>
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { BellIcon, MenuIcon, XIcon } from '@heroicons/vue/outline'
import FooterAdmin from '@/components/Footer.vue'
import { onMounted } from '@vue/runtime-core'
import { usePage } from '@inertiajs/inertia-vue3'
import { computed,ref } from 'vue'

const navigation = [
  { name: 'Dashboard', href: route('dashboard'), current:false,component:'Dashboard/Index' },
  { name: 'Members', href: route('members.index'), current:false,component:'Member/Index' },
  { name: 'Meetings', href: route('meetings.index'), current:false,component:'Meeting/Index' },
//   { name: 'Reports', href: route('reports.index'), current: false,component:'Reports/Index' },
//   { name: 'Totals', href: route('totals.index'), current: false,component:'Totals/Index' },
//   { name: 'Totals', href: route('totals.index'), current: false,component:'Totals/Index' },
//   { name: 'GrandTotals', href:route('grandtotals.index'), current: false,component:'GrandTotals/Index' },
//   { name: 'Subtotals', href:route('subtotals.index'), current: false,component:'Subtotals/Index' },
//   { name: 'Accounts', href:route('accounts.index'), current: false,component:'Accounts/Index' },
//   { name: 'Account Entries', href: route('accountentries.index'), current: false,component:'AccountEntries/Index' },
]

export default {
  components: {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    BellIcon,
    MenuIcon,
    XIcon,
    FooterAdmin,
  },


  setup() {

       const showToast=ref(false);
        const comp = computed(() => usePage().component.value)
        const user = computed(() => usePage().props.value.auth.user)


// onMounted(()=>console.log(comp))
    //   onMounted(()=>{

    //          showToast=true
    //          setTimeout(showToast=false,1000);
    //   });

    return {
      navigation,comp,user//showToast
    }
  },
}
</script>
<style>
    /* enter */
    .toast-enter-from{
        opacity: 0;
        transform: translateY(-60px);
    }
    .toast-enter-to{
        opacity: 1;
        transform: translateY(0px);
    }
    .toast-enter-active{
        transition: all 0.3s ease;
    }
</style>
