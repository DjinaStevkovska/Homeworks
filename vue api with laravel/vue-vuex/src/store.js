import Vue from 'vue'
import Vuex from 'vuex'
import ApiService from '@/api/AppApi'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    user: { id: '123', name: 'John Doe' },
    categories: [
      'sustainability',
      'nature',
      'animal welfare',
      'housing',
      'education',
      'food',
      'community'
    ],
    eventsTotal: 0,
    events: [],
    event: {}
  },
  //sync - NO API/AXIOS/AJAX/FETCH calls!!!
  mutations: {
    // mutations with capslock and underscore
    ADD_EVENT(state, event) {
      state.events.push(event)
    },
    SET_EVENTS(state, events) {
      state.events = events
    },
    SET_EVENT(state, event) {
      state.event = event
    },
    SET_EVENTS_TOTAL(state, eventsTotal) {
      state.eventsTotal = eventsTotal
    }
  },
  // async - AXIOS/AJAX/FETCH :-)
  // Form => Component => Actions => Mutations => State
  actions: {
    // snakeCase()
    createEvent({ commit }, event) {
      // add event to DB on the server (json-server/fake server)
      return ApiService.createEvent(event).then(() => {
        commit('ADD_EVENT', event)
      })
      // add event to our state via mutation
    },
    // limit,page (url)
    fetchEvents({ commit }) {
      ApiService.getEvents()
        .then(response => {
          let events = Array(response.data)
          commit('SET_EVENTS', response.data)
          commit('SET_EVENTS_TOTAL', events.length)
        })
        .catch(error => {
          console.log('Some error occurred' + error.response)
        })
    },
    fetchEvent({ commit, getters }, id) {
      var event = getters.getEventById(id)
      if (event) {
        commit('SET_EVENT', event)
      } else {
        ApiService.getEvent(id)
          // if we have the event in our local store(Vuex store)

          .then(response => {
            commit('SET_EVENT', response.data)
          })
          .catch(error => {
            console.log('Some error occurred' + error)
          })
      }
    }
  },
  getters: {
    getEventById: state => id => {
      return state.events.find(event => event.id === id)
    }
  }
})
