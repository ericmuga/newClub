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
  <div class="flex flex-col mt-4 text-center">
   <p>Members {{meeting.attendees.members}}</p>
   <p>Guests {{meeting.attendees.guests}}</p>
   <p>Total {{meeting.attendees.guests+meeting.attendees.members}}</p>
   <Link
     :href="route('meeting.show',[meeting.type,meeting.identifier])"
     class="text-teal-500"
   >
    View Details
   </Link>
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
