import axios from 'axios'
axios.defaults.xsrfHeaderName = 'X-CSRFTOKEN'
axios.defaults.xsrfCookieName = 'csrftoken'

const $http = axios.create({
  baseURL: 'https://laravel.test/',
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
  getEvents() {
    // return $http.get('/events?_limit=' + perPage + '&_page=' + page)
    return $http.get('/events')
  },
  getEvent(id) {
    return $http.get('/events/' + id)
  }
}
