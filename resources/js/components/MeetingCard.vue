<template>
    <div >




<div class="max-w-md px-8 py-4 my-8 bg-white rounded-lg shadow-lg">
  <div class="flex justify-center -mt-16 md:justify-end">
    <img class="object-cover w-10 h-10 border-2 border-indigo-500 rounded-full"
     :src="`/images/${meeting.icon}.png`"
    >
  </div>
  <div>
    <h3 class="text-3xl font-semibold text-gray-800">{{meeting.meeting_date}}</h3>
    <p class="">{{meeting.meeting_date_humans}}</p>
    <p class="mt-2 text-gray-600">

    </p>
  </div>
  <div class="flex flex-row mt-4">
   <p class="flex">Present {{meeting.attendees}}</p>
   <p>Present {{meeting.attendees}}</p>
   <a href="#" class="text-xl font-medium text-indigo-500">


        <Button
         class="pi pi-secondary"
        >
        Explore
        </Button>
    </a>
  </div>
</div>

    </div>
</template>

<script setup>
import {ref,toRefs} from 'vue'
   const props= defineProps({meeting:Object})

</script>

<style lang="scss" scoped>

</style>
