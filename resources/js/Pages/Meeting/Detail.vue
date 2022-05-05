<template>


    <div>
<!-- component -->


  <transition
          appear

          @before-enter="beforeEnter"
          @enter="enter"
        >


<div class="bg-gray-100">

    <!-- End of Navbar -->

    <div class="container p-5 mx-auto my-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="p-3 bg-white border-t-4 border-green-400">
                    <!-- <div class="overflow-hidden image">
                        <img class="w-full h-auto mx-auto"
                            src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                            alt="">
                    </div> -->

                     <span class="text-sm font-light"> Guest Speaker</span>

                    <h1 class="my-1 text-xl font-bold leading-8 text-gray-900">
                        Jane Doe</h1>
                    <h3 class="leading-6 text-gray-600 font-lg text-semibold">Meeting Description</h3>
                    <p class="text-sm leading-6 text-gray-500 hover:text-gray-600">
                         <!-- {{meeting.type}} -->
                         Dummy Meeting Description
                    </p>
                    <ul
                        class="px-3 py-2 mt-3 text-gray-600 bg-gray-100 divide-y rounded shadow-sm hover:text-gray-700 hover:shadow">
                        <li class="flex items-center py-3">
                            <span>Date</span>
                            <span class="ml-auto"><span
                                    class="px-2 py-1 text-sm text-white rounded"></span>Nov 07, 2016</span>
                        </li>

                        <li class="flex items-center py-3">
                            <span>Official Start Time</span>
                            <span class="ml-auto"><span
                                    class="px-2 py-1 text-sm text-white rounded"></span>1900HRS</span>
                        </li>

                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span
                                    class="px-2 py-1 text-sm text-white bg-green-500 rounded">Gradable</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Last updated</span>
                            <span class="ml-auto">Nov 07, 2016</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Friends card -->
                <div class="p-3 bg-white hover:shadow">
                    <div class="flex items-center space-x-3 text-xl font-semibold leading-8 text-gray-900">
                        <span class="text-green-500">
                            <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </span>
                        <span>Meeting Reports</span>
                    </div>
                    <div class="grid grid-cols-3 space-x-1">
                        <div class="my-2 text-center border-2 rounded-md border-slate-300">
                          <Button>
                                Member Attendance Report
                         </Button>
                        </div>
                        <div class="mx-2 my-2 text-center border-2 rounded-md border-slate-300 ">
                          <Button class="p-button-warning">
                                Guest  Attendance Report
                         </Button>
                        </div>
                        <div class="mx-2 my-2 text-center border-2 rounded-md border-slate-300 ">
                          <Button class=" p-button-secondary">
                                All Attendees Report
                         </Button>
                        </div>

                    </div>
                </div>
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full h-64 mx-2 md:w-9/12">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="p-3 bg-white rounded-sm shadow-sm">

                    <div class="text-gray-700">
                      <!-- component -->
<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
  <div
    class="min-w-0 overflow-hidden bg-white rounded-lg shadow-xs dark:bg-gray-800"
  >
    <div class="flex items-center p-4">
      <div
        class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
      >
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
          <path
            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
          ></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Total Attendees
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          <!-- {{meeting.attendees.members}} -->
        </p>
      </div>
    </div>
  </div>
  <div
    class="min-w-0 overflow-hidden bg-white rounded-lg shadow-xs dark:bg-gray-800"
  >
    <div class="flex items-center p-4">
      <div
        class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
      >
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
          <path
            fill-rule="evenodd"
            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Members
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          <!-- $ 46,760.89 -->
        </p>
      </div>
    </div>
  </div>
  <div
    class="min-w-0 overflow-hidden bg-white rounded-lg shadow-xs dark:bg-gray-800"
  >
    <div class="flex items-center p-4">
      <div
        class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
      >
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
          <path
            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
          ></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Guests
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          <!-- 376 -->
        </p>
      </div>
    </div>
  </div>
  <div
    class="min-w-0 overflow-hidden bg-white rounded-lg shadow-xs dark:bg-gray-800"
  >
    <div class="flex items-center p-4">
      <div
        class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
      >
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
          <path
            fill-rule="evenodd"
            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Speakers
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">5</p>
      </div>
    </div>
  </div>
</div>

                    </div>

                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div class="p-3 bg-white rounded-sm shadow-sm">

                    <div class="grid grid-cols-2 p-5 m-5">
                        <div class="col-span-2">
                            <div class="flex items-center mb-3 font-semibold leading-8 text-gray-900">

                                <span class="tracking-wide text-center">Members</span>
                                <Pagination :links=members.links :prefix="`meetings/makeup/makeup18`"/>
                            </div>
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="text-sm text-left text-gray-500 w-md dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="p-4 px-6">
                                            <div class="flex items-center">
                                                <input id="checkbox-all" type="checkbox"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="checkbox-all" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <!-- <th></th> -->
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                                email
                                        </th>
                                        <!-- <th scope="col" class="px-6 py-3">
                                            Field
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            RI Number
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <span class="sr-only">Controls</span>
                                        </th> -->
                                    </tr>
                            </thead>
                            <tbody>
                            <tr
                            v-for="member in members.data" :key="member.id"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 ">
                            <div class="flex items-center">
                            <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-1" class="sr-only">checkbox</label>
                            </div>
                            </td>
                            <!-- <th>

                                <img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500"
                                    :src="member.gravatar"
                                    alt="Bordered avatar">

                            </th> -->
                            <th scope="row" class="font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{member.name}}
                            </th>
                             <td class="">
                            {{member.email}}
                            </td>
                          <!--  <td class="">
                            {{member.field}}
                            </td>
                            <td class="">
                            {{member.rotary_number}}
                            </td>
                            <td class="text-right ">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td> -->
                            </tr>
                            </tbody>
                            </table>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center mb-3 space-x-2 font-semibold leading-8 text-gray-900">
                                <!-- <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span> -->
                                <span class="tracking-wide">Guests</span>
                            </div>
                            <!-- <ul class="space-y-2 list-inside">
                                <li>
                                    <div class="text-teal-600">Masters Degree in Oxford</div>
                                    <div class="text-xs text-gray-500">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Bachelors Degreen in LPU</div>
                                    <div class="text-xs text-gray-500">March 2020 - Now</div>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</div>
  </transition>

    </div>
</template>

<script setup>
import gsap from 'gsap';

 const props=defineProps({meeting:Object,
              members:Object,
             })


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

</script>

<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>
