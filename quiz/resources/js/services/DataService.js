import axios from 'axios'
import { API_URL } from './api-url'

class DataService {
  constructor (data = {}) {
    this.getUrl = {
      index: () => `${API_URL}/${data.name}`,
      show: (id) => `${API_URL}/${data.name}/${id}`,
      create: () => `${API_URL}/${data.name}/create`,
      store: () => `${API_URL}/${data.name}`,
      edit: (id) => `${API_URL}/${data.name}/${id}/edit`,
      update: (id) => `${API_URL}/${data.name}/${id}`,
      delete: (id) => `${API_URL}/${data.name}/${id}`
    }
  }

  list () {
    return axios
      .get(this.getUrl.index())
      .then(response => response.data)
  }

  index () {
    return axios
      .get(this.getUrl.index())
      .then(response => response.data)
  }

  get (id) {
    return axios
      .get(this.getUrl.show(id))
      .then(response => response.data)
  }

  create () {
    return axios
      .get(this.getUrl.create())
      .then(response => response.data)
  }

  store (data) {
    return axios
      .post(this.getUrl.store(), data)
      .then(response => response.data)
  }

  edit (id) {
    return axios
      .get(this.getUrl.edit(id))
      .then(response => response.data)
  }

  update (id, data) {
    return axios
      .post(this.getUrl.update(id), data)
      .then(response => response.data)
  }

  delete (id) {
    return axios.delete(this.getUrl.delete(id))
  }
}

export default DataService
