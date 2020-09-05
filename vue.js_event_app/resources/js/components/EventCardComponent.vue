<template>
  <router-link :to="{name: 'event-show', params: {id: '1'} }">
    <div class="card">
      <div class="card-header">{{event.title}}</div>
      <div class="card-body">{{event.attendees.length }} attending</div>
    </div>
  </router-link>
</template>

<script>
export default {
  data() {
    return {
      event: {
        id: 1,
        title: "Beach Cleanup",
        date: "Thursday Sept 3, 2020",
        time: "6:00",
        attendees: [
          { id: "111", name: "John Doe" },
          { id: "222", name: "Matt Toe" },
        ],
      },
    };
  },
};
</script>