import DataService from './DataService'
import { API_URL } from './api-url'
import axios from 'axios'

class ManagerCustomerDataService extends DataService {
  constructor () {
    super({ name: 'quiz' })
    // this.getUrl.createContactPerson = () => `${API_URL}/quiz/create_contact_person`
    this.getUrl.getQuestions = () => `${API_URL}/quiz/get_questions`
  }

//   updateContactPerson (id, data) {
//     return axios
//       .post(this.getUrl.updateContactPerson(id), data)
//       .then(response => response.data)
//   }

  getQuestions () {
    return axios
      .get(this.getUrl.getQuestions())
      .then(response => response.data)
  }

}

export default new ManagerCustomerDataService()
