<template>
  <div>
    <h1>Events Listing</h1>
    <EventCard v-for="event in events" :key="event.id" :event="event" />
    <template v-if="page != 1">
      <router-link
        :to="{ name: 'event-list', query: { page: page - 1 } }"
        rel="prev"
      >
        Previous page
      </router-link>
      <template v-if="hasNextPage">
        |
      </template>
    </template>
    <router-link
      v-if="hasNextPage"
      :to="{ name: 'event-list', query: { page: page + 1 } }"
      rel="prev"
    >
      Next page
    </router-link>
  </div>
</template>

<script>
import EventCard from '@/components/EventCard.vue'

import { mapState } from 'vuex'

export default {
  components: {
    EventCard
  },
  computed: {
    // http://localhost:3000/events?_limit=10&_page=2
    // this.$route.query.page  =  &_page=2"
    page() {
      // return 2
      return parseInt(this.$route.query.page) || 1
    },
    hasNextPage() {
      // 10 > (4 *3)
      return this.eventsTotal > this.page * this.perPage
    },

    ...mapState(['events', 'eventsTotal'])
  },
  created() {
    this.perPage = 3
    this.$store.dispatch('fetchEvents', {
      perPage: this.perPage,
      page: this.page
    })
  }
}
// Pagination

// GET http://localhost:3000/events?_limit=10&_page=2
</script>
