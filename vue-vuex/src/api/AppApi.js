import axios from 'axios'

const $http = axios.create({
  baseURL: 'http://localhost:3000/',
  //   baseURL: 'http://laravel.test/',
  withCredentials: false, // This is the default
  headers: {
    Accept: 'application/json',
    'Content-Type': 'application/json'
  }
})

export default {
  createEvent(event) {
    return $http.post('/events', event)
  },
  // http://localhost:3000/events?_limit=10&_page=2
  getEvents(perPage, page) {
    return $http.get('/events?_limit=' + perPage + '&_page=' + page)
  },
  getEvent(id) {
    return $http.get('/events/' + id)
  }
}
