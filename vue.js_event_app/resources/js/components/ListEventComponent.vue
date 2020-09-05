<template>
  <div>
    <h1>Event Listing</h1>
    <EventCardComponent />
  </div>
</template>

<script>
import EventCard from "./EventCardComponent";
export default {
  components: {
    EventCardComponent,
  },
};
</script>