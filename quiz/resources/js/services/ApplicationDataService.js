import DataService from './DataService'
import axios from 'axios'
import { API_URL } from './api-url'

class ApplicationDataService extends DataService {
  constructor () {
    super({ name: 'applications' })
    this.getUrl.create = (customerId) => `${API_URL}/customers/${customerId}/applications/create`
    this.getUrl.store = (customerId) => `${API_URL}/customers/${customerId}/applications`
    this.getUrl.help = (customerId) => `${API_URL}/customers/${customerId}/applications/help`
    this.getUrl.calculate = () => `${API_URL}/applications/calculate`
  }

  create (customerId) {
    return axios
      .get(this.getUrl.create(customerId))
      .then(response => response.data)
  }

  store (customerId, data) {
    return axios
      .post(this.getUrl.store(customerId), data)
      .then(response => response.data)
  }

  help (customerId, data) {
    return axios
      .post(this.getUrl.help(customerId), data)
      .then(response => response.data)
  }

  calculate (data) {
    return axios
      .post(this.getUrl.calculate(), data)
      .then(response => response.data)
  }
}

export default new ApplicationDataService()
